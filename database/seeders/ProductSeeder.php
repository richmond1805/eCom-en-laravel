<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Peanut Butter Cookies',
                "price"=>"₱50",
                "picture"=>"https://handletheheat.com/wp-content/uploads/2020/…-Butter-Oatmeal-Chocolate-Chip-Cookies-SQUARE.jpg",
                ],
                
        ]);
    }
}
