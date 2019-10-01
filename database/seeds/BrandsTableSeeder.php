<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name'          =>  'Adidas',
        ]);

        Brand::create([
            'name'          =>  'Vans',
        ]);

        Brand::create([
            'name'          =>  'Nike',
        ]);

        Brand::create([
            'name'          =>  'Puma',
        ]);
    }
}
