<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
                'price'=>"200",
                'description'=>"A smart phone with 4gb ram and much more feature",
                'category'=>"mobile",
                'gallery'=>"public/images/tv.jpg"
            ],
            [
                'name'=>' mobile 2',
                'price'=>"300",
                'description'=>"A smart phone with 6gb ram and much more feature",
                'category'=>"mobile",
                'gallery'=>"https://specifications-pro.com/en/honor-magic-x/"
            ],
            [
                'name'=>'LG TV',
                'price'=>"600",
                'description'=>"A smart tv much more feature",
                'category'=>"tv",
                'gallery'=>"tv.jpg"
            ],
            [
                'name'=>'walton Fridge',
                'price'=>"800",
                'description'=>"A smart fridge much more feature",
                'category'=>"fridge",
                'gallery'=> file_get_contents('public/images/fridge.jpeg')
            ],


        ]);

    }
}
