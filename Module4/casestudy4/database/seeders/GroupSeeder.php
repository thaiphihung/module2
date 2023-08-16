<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Groups;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            'Admin',
            'Director',
            'Manager',
            'Staff',
        ];
        foreach ($name as $name){
            $item=new Groups();
            $item->name = $name;
            $item->save();
        }
    }
}
