<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group_Role;

class Group_RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group_role::truncate();
        for($i = 1; $i <= 49; $i++){
            $item = new Group_role();
            $item->role_id= $i;
            $item->group_id = 1;
            $item->save();
        }
    }
}
