<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tables=['categories', 'users', 'products','customers','orders','oderdetail','groups','roles','group_role'];
        $actions = ['viewAny','view','create','update','delete','restore','forceDelete'];
        foreach($tables as $table){
            foreach($actions as $action){
                $item = new Roles();
                $item->name = $table.'_'.$action;
                $item ->group_name =$table;
                $item ->save();

            }
    }
    }
}