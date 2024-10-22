<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nama' => 'Stola',                
                'price' => 15000,
                'stock' => 50,
                'description' => 'Barang Bagus',
                'image' => 'stola.JPG',
                'category' => 'stola'
            ],
            [
                'nama' => 'sortali',                
                'price' => 30000,
                'stock' => 50,
                'description' => 'Barang Bagus',
                'image' => 'sortali.JPG',
                'category' => 'sortali'
            ],
            [
                'nama' => 'gantungan',                
                'price' => 10000,
                'stock' => 50,
                'description' => 'Barang Bagus',
                'image' => 'gantungan.JPEG',
                'category' => 'gantungan'
            ],

        );
        foreach ($data as $d) {
            product::create([
                'nama' => $d['nama'],
                'price' => $d['price'],
                'stock' => $d['stock'],
                'description' => $d['description'],
                'image' => $d['image'],
                'category' => $d['category']                
            ]);
        }
    }
}
