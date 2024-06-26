<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Iphone',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://powermaccenter.com/cdn/shop/files/iPhone_15_Pro_Max_Natural_Titanium_PDP_Image_Position-1__en-US_0da4d69a-853f-4060-a93e-df9b0aee24bf.jpg?v=1695860918',
            ],
            [
                'name' => 'Vivo',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1697438868389/a422d9447678aec43609b61f85a5fefc.png',
            ],
            [
                'name' => 'Samsung',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://images.samsung.com/is/image/samsung/p6pim/sg/2401/gallery/sg-galaxy-s24-s928-sm-s928bztqxsp-thumb-539305064',
            ],
            [
                'name' => 'Realme',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://image01.realme.net/general/20240613/1718272769867c652e979150b405b954fd979bfd77c3d.png.webp',
            ],
            [
                'name' => 'Nokia',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://images.ctfassets.net/wcfotm6rrl7u/1vuJoVeAkX7zR7onLCkT9g/75e749405f03f62a45a8e39bf9365dd3/nokia-X30_5G-cloudy_blue-front_back-int.png',
            ],
            [
                'name' => 'Cherry Mobile',
                'description' => 'Para my day',
                'price' => 2220.00,
                'image' => 'https://p-ph.ipricegroup.com/uploaded_7bb96f9914db2c7526b4a4f195b87c0c.jpg',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
