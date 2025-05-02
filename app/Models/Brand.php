<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Traits\File;

class Brand extends Model
{
    use File;

    /**
     * Attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'country',
        'caption',
        'description',
        'website',
        'slug',
        'rating',
        'default',
        'image'
    ];

    /**
     * Attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'rating' => 'float',
            'default' => 'boolean',
        ];
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image_url'];

    /**
     * Get the URL of the image.
     */
    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->getFileUrl($this->image)
        );
    }
}
