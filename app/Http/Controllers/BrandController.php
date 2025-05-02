<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Traits\File;
use App\Models\Brand;
use App\Traits\Response;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;

class BrandController extends Controller
{
    use File, Response;

    /**
     * Return a paginated list of brands for the website.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexWeb(Request $request)
    {
        $countryCode = $request->attributes->get('userCountry');

        $brands = Brand::where(function ($query) use ($countryCode) {
            if ($countryCode) {
                $query->where('country', $countryCode);
            } else {
                $query->where('default', true);
            }

            $query->orWhereNull('country');
        })->orderByDesc('rating')->orderBy('name')->paginate(20);

        if ($brands->total() === 0) {
            return $this->error('No brands have been listed.', 404);
        }

        if ($brands->count() === 0) {
            return $this->error("No brands were found on page {$brands->currentPage()}.", 404);
        }

        return $this->success('The brands were successfully retrieved.', 200, $brands, [
            'country' => $countryCode,
        ]);
    }

    /**
     * Return a paginated list of brands for the portal.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function indexPortal(Request $request)
    {
        $brands = Brand::query();

        if ($request->has('countryCode') && $request->countryCode) {
            $brands = $brands->where('country', strtolower($request->countryCode));
        }

        $brands = $brands->orderByDesc('rating')->orderBy('name')->paginate(10);

        if ($brands->total() === 0) {
            return $this->error('No brands have been listed.', 404);
        }

        if ($brands->count() === 0) {
            return $this->error("No brands were found on page {$brands->currentPage}.", 404);
        }

        return $this->success('The brands were successfully.', 200, $brands);
    }

    /**
     * Fetch a single brand by its ID.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchById(int $id)
    {
        try {
            $brand = Brand::findOrFail((int) $id);
        } catch (ModelNotFoundException $e) {
            return $this->error('The brand was not found.', 404, $e->getMessage());
        } catch (Exception $e) {
            return $this->error('An error occured while fetching the brand.', 500, $e->getMessage());
        }

        return $this->success('The brand was successfully retrieved.', 200, $brand);
    }

    /**
     * Fetch a single brand by its slug.
     *
     * @param string $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchBySlug(string $slug)
    {
        try {
            $brand = Brand::where('slug', $slug)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $this->error('The brand was not found.', 404, $e->getMessage());
        } catch (Exception $e) {
            return $this->error('An error occured while fetching the brand.', 500, $e->getMessage());
        }

        return $this->success('The brand was successfully retrieved.', 200, $brand);
    }

    /**
     * Create a new brand.
     *
     * @param \App\Http\Requests\StoreBrandRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreBrandRequest $request)
    {
        $validatedData = $request->validated();

        try {
            if (isset($validatedData['image']) && $validatedData['image']) { // Upload brand image if user provided one
                $validatedData['image'] = $this->uploadFile($validatedData['image'], 'images/brands');
            }

            $brand = Brand::create($validatedData);
        } catch (Exception $e) {
            if (isset($validatedData['image']) && $validatedData['image']) { // If an error occurrs while creating the brand, delete the uploaded image (if it exists) to prevent orphaned files in the storage
                $this->deleteFile($validatedData['image']);
            }

            return $this->error('An error occurred while creating the brand! Please try again.', 500, $e->getMessage());
        }

        return $this->success('The brand was successfully created.', 201, $brand);
    }

    /**
     * Update an existing brand.
     *
     * @param \App\Http\Requests\UpdateBrandRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateBrandRequest $request, int $id)
    {
        $validatedData = $request->validated();

        try {
            $brand = Brand::findOrFail($id);

            if (isset($validatedData['image']) && $validatedData['image']) { // Upload brand image if user provided one
                $oldImage = $brand->image; // Store the old image path to delete it later
                $validatedData['image'] = $this->uploadFile($validatedData['image'], 'images/brands');
            }

            $brand->update($validatedData);

            if(isset($oldImage) && $oldImage) { // Delete old brand image if it exists
                $this->deleteFile($oldImage);
            }
        } catch (ModelNotFoundException $e) {
            return $this->error('The brand was not found.', 404, $e->getMessage());
        } catch (Exception $e) {
            if (isset($validatedData['image']) && $validatedData['image']) { // If an error occurrs while updating the brand, delete the uploaded image (if it exists) to prevent orphaned files in the storage
                $this->deleteFile($validatedData['image']);
            }

            return $this->error('An error occurred while updating the brand! Please try again.', 500, $e->getMessage());
        }

        return $this->success('The brand was successfully updated.', 200, $brand);
    }

    /**
     * Delete a brand.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $brand = Brand::findOrFail($id);
            $brand->delete();

            if ($brand->image) { // Delete brand image if it exists
                $this->deleteFile($brand->image);
            }
        } catch (ModelNotFoundException $e) {
            return $this->error('The brand was not found.', 404, $e->getMessage());
        } catch (Exception $e) {
            return $this->error('An error occurred while deleting the brand! Please try again.', 500, $e->getMessage());
        }

        return $this->success('The brand was successfully deleted.', 200);
    }

    public function destroyMany(Request $request)
    {
        $ids = array_map('intval', explode(',', $request->input('ids'))); // Convert the comma-separated string to an array of integers

        if (empty($ids)) {
            return $this->error('No brand IDs were provided.', 400);
        }

        try {
            $brandImages = Brand::whereIn('id', $ids)->pluck('image')->toArray();

            Brand::whereIn('id', $ids)->delete(); // Delete brands from the database

            if ($brandImages) { // Delete brand images if they exist
                foreach ($brandImages as $image) {
                    $this->deleteFile($image);
                }
            }
        } catch (Exception $e) {
            return $this->error('An error occurred while deleting the brands! Please try again.', 500, $e->getMessage());
        }

        return $this->success('The brands were successfully deleted.', 200);
    }
}
