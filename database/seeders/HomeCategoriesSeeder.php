<?php

namespace Database\Seeders;

use App\Models\HomeCategory;
use Illuminate\Database\Seeder;

class HomeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeCategory::insert([
            'sel_categories' =>  '1,2,3,4,5,6,9,11,15',
            'no_of_products' => '6',
        ]);
    }
}
