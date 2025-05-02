<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait File
{
    /**
     * Upload file to storage
     *
     * @param string $rawFile
     * @param string $directory
     * @param string $disk
     * @return string
     */
    protected function uploadFile(string $rawFile, string $directory, string $disk = 'public'): string
    {
        try {
            // Extract extension (e.g. png, jpg)
            preg_match('/^data:image\/(\w+);base64,/', $rawFile, $matches);
            $extension = $matches[1] ?? 'png';

            // Clean the base64 string
            $base64 = preg_replace('/^data:image\/\w+;base64,/', '', $rawFile);
            $binary = base64_decode($base64);

            // Generate a unique filename
            $filename = Str::random(20) . '.' . $extension;

            // Store in disk
            Storage::disk($disk)->put("{$directory}/{$filename}", $binary);

            $path = "{$directory}/{$filename}";
        } catch (Exception $e) {
            return throw new Exception('File upload failed: ' . $e->getMessage());
        }

        return $path;
    }

    /**
     * Get file URL
     *
     * @param string $path
     * @param string $disk
     * @return string
     */
    protected function getFileUrl(string|null $path, string $disk = 'public'): string|null
    {
        $url = null;

        try {
            if ($path) $url = Storage::disk($disk)->url($path);
        } catch (Exception $e) {
            $url = null;
        }

        return $url;
    }

    /**
     * Delete file from storage
     *
     * @param string $path
     * @param string $disk
     * @return bool
     */
    protected function deleteFile(string $path, string $disk = 'public'): bool
    {
        try {
            if (Storage::disk($disk)->exists($path)) {
                Storage::disk($disk)->delete($path);
            }
        } catch (Exception $e) {
            return false;
        }

        return true;
    }
}
