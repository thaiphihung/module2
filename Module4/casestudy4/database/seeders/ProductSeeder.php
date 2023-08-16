<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop LG Gram 2021',
                'slug' => 'laptop-lg-gram-2021',
                'price' => '394900',
                'description' => 'Máy tính xách tay LG Gram 2021 16ZD90P-G.AX54A5 sở hữu màn hình với độ phân giải đỉnh cao.',
                'quantity' =>'0',
                'status' => '11',
                'image' => 'd.jpg',
                'category_id'=> '1'
            ]
        ]);
    }
}
