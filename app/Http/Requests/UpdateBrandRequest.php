<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $brandId = $this->route('id');

        return [
            'name' => 'sometimes|required|string|max:255',
            'country' => 'sometimes|nullable|string|max:2',
            'caption' => 'sometimes|nullable|string|max:255',
            'description' => 'sometimes|nullable|string',
            'website' => 'sometimes|nullable|url',
            'slug' => 'sometimes|required|string|max:255|unique:brands,slug,' . $brandId,
            'rating' => 'sometimes|nullable|numeric|min:0|max:5',
            'default' => 'sometimes|boolean',
            'image' => [
                'nullable',
                'string',
                'regex:/^data:image\/(jpeg|png|jpg|gif|webp);base64,/',
                function ($attribute, $value, $fail) {
                    try {
                        $sizeInBytes = strlen(base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $value)));

                        if ($sizeInBytes > (5 * 1024 * 1024)) {
                            $fail('The image should not exceed 5MB.');
                        }
                    } catch (\Exception $e) {
                        $fail('The image must be a file of type: jpeg, png, jpg, gif, or webp.');
                    }
                }
            ]
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'image.regex' => 'The image must be a file of type: jpeg, png, jpg, gif, or webp.'
        ];
    }
}
