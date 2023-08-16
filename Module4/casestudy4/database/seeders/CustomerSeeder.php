<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Phan Văn Trung',
                'email' => 'phanvantrung@gmail.com',
                'phone' => '1238754',
                'address' => 'Vĩnh Linh',
                'password' =>'123456',
            ],
            [
                'name' => 'Nguyễn Hữu Khương',
                'email' => 'nguyenhuukhuong@gmail.com',
                'phone' => '471874',
                'address' => 'Triệu Phong',
                'password' =>'654321',
            ],
        ]);
    }
}
