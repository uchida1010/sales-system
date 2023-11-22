<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Http\Const\FormValue;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          for( $i = 0; $i < 2; $i++ ) { 
            Product::create([
            'category' => FormValue::products_category[$i],
            'name' => FormValue::products[$i]
            ]);
          }

          for( $i = 2; $i < 6; $i++ ) { 
            Product::create([
                'category' => FormValue::products_category[2],
                'name' => FormValue::products[$i],
                ]);
          }
    }
}
