<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::insertOrIgnore([
            [
                'name' => 'Brand A',
                'country' => 'US',
                'caption' => 'Brand A Caption',
                'description' => 'Brand A Description',
                'website' => 'https://example.com/brand-a',
                'slug' => 'brand-a',
                'rating' => 4.5,
                'default' => false,
                'image' => null,
            ],
            [
                'name' => 'Brand B',
                'country' => 'CM',
                'caption' => 'Brand B Caption',
                'description' => 'Brand B Description',
                'website' => 'https://example.com/brand-b',
                'slug' => 'brand-b',
                'rating' => 4.0,
                'default' => true,
                'image' => null,
            ],
            [
                'name' => 'Brand C',
                'country' => 'CA',
                'caption' => 'Brand C Caption',
                'description' => 'Brand C Description',
                'website' => 'https://example.com/brand-c',
                'slug' => 'brand-c',
                'rating' => 3.5,
                'default' => false,
                'image' => null,
            ],
            [
                'name' => 'Brand D',
                'country' => null,
                'caption' => 'Brand D Caption',
                'description' => 'Brand D Description',
                'website' => 'https://example.com/brand-d',
                'slug' => 'brand-d',
                'rating' => 4.8,
                'default' => true,
                'image' => null,
            ],
            [
                'name' => 'Brand E',
                'country' => 'GB',
                'caption' => 'Brand E Caption',
                'description' => 'Brand E Description',
                'website' => 'https://example.com/brand-e',
                'slug' => 'brand-e',
                'rating' => 4.2,
                'default' => false,
                'image' => 'CM',
            ],
            [
                'name' => 'Brand F',
                'country' => null,
                'caption' => 'Brand F Caption',
                'description' => 'Brand F Description',
                'website' => 'https://example.com/brand-f',
                'slug' => 'brand-f',
                'rating' => 3.9,
                'default' => true,
                'image' => null,
            ],
            [
                'name' => 'Brand G',
                'country' => 'AU',
                'caption' => 'Brand G Caption',
                'description' => 'Brand G Description',
                'website' => 'https://example.com/brand-g',
                'slug' => 'brand-g',
                'rating' => 4.1,
                'default' => false,
                'image' => null,
            ],
            [
                'name' => 'Brand H',
                'country' => null,
                'caption' => 'Brand H Caption',
                'description' => 'Brand H Description',
                'website' => 'https://example.com/brand-h',
                'slug' => 'brand-h',
                'rating' => 4.7,
                'default' => true,
                'image' => null,
            ],
            [
                'name' => 'Brand I',
                'country' => 'FR',
                'caption' => 'Brand I Caption',
                'description' => 'Brand I Description',
                'website' => 'https://example.com/brand-i',
                'slug' => 'brand-i',
                'rating' => 3.8,
                'default' => false,
                'image' => null,
            ],
            [
                'name' => 'Brand J',
                'country' => null,
                'caption' => 'Brand J Caption',
                'description' => 'Brand J Description',
                'website' => 'https://example.com/brand-j',
                'slug' => 'brand-j',
                'rating' => 4.6,
                'default' => true,
                'image' => null,
            ],
        ]);
    }
}
