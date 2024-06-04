<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $products = [
            [
                'name' => 'Ogura Cheese',
                'type' => 'makanan',
                'price' => 36500,
                'description' => 'Lorem ipsum dolor sit amet consectetur. A bibendum in ut tellus. Est cras amet.',
                'image' => 'Ogura Cheese.png',
            ],
            [
                'name' => 'Ogura Cheese Toppin',
                'type' => 'makanan',
                'price' => 65000,
                'description' => 'Lorem ipsum dolor sit amet consectetur. A bibendum in ut tellus. Est cras amet.',
                'image' => 'Ogura Cheese Toppin.png',
            ],
            [
                'name' => 'Ogura Chocolate',
                'type' => 'makanan',
                'price' => 33500,
                'description' => 'Lorem ipsum dolor sit amet consectetur. A bibendum in ut tellus. Est cras amet.',
                'image' => 'Ogura Chocolate.png',
            ],
            [
                'name' => 'Malmil Chocolate',
                'type' => 'minuman',
                'price' => 12000,
                'description' => 'Lorem ipsum dolor sit amet consectetur. A bibendum in ut tellus. Est cras amet.',
                'image' => 'Malmil Chocolate.png',
            ],
            [
                'name' => 'Malmil Cheese',
                'type' => 'minuman',
                'price' => 12000,
                'description' => 'Lorem ipsum dolor sit amet consectetur. A bibendum in ut tellus. Est cras amet.',
                'image' => 'Malmil Cheese.png',
            ],
            [
                'name' => 'Mini Ogura',
                'type' => 'minuman',
                'price' => 56000,
                'description' => 'Lorem ipsum dolor sit amet consectetur. A bibendum in ut tellus. Est cras amet.',
                'image' => 'Mini Ogura.png',
            ],
        ];

        foreach ($products as $product) {
            // Salin gambar dari public/seeder_images ke public/storage/images
            $sourcePath = public_path('seeder_images/' . $product['image']);
            $destinationPath = storage_path('app/public/images/' . $product['image']);

            if (File::exists($sourcePath)) {
                File::copy($sourcePath, $destinationPath);
            }

            // Buat produk baru di database
            Product::create($product);
        }
    }

}
