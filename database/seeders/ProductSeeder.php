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
            'name'=>'Strawberry Buckle',
            "price"=>"₱210",
            "picture"=>"https://images.media-allrecipes.com/userphotos/6614329.jpg",
            ],
            [
            'name'=>'Cookies',
            "price"=>"₱150",
            "picture"=>"https://assets.bonappetit.com/photos/5ca534485e96521ff23b382b/1:1/w_2700,h_2700,c_limit/chocolate-chip-cookie.jpg",
            ],
            [
            'name'=>'Chocolate Cake',
            "price"=>"₱210",
            "picture"=>"https://www.tasteofhome.com/wp-content/uploads/2018/01/Best-Chocolate-Cake_exps47786._THCA1917912C10_02_1bC_RMS-4.jpg?fit=700,1024",
            ],    
            [
            'name'=>'Peanut Butter Pie',
            "price"=>"₱230",
            "picture"=>"https://static.onecms.io/wp-content/uploads/sites/19/2007/08/20/Peanut_Butter_Pie_384-2000.jpg",
            ],
            [
            'name'=>'Key Lime Pie',
            "price"=>"₱200",
            "picture"=>"https://www.livewellbakeoften.com/wp-content/uploads/2021/05/Key-Lime-Pie-NEW-7s.jpg",
            ],
        ]);
    }
}
