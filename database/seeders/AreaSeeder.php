<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;
use App\Http\Const\FormValue;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Area::create([
            'region' => FormValue::region[0],
            'prefecture' => FormValue::prefecture[0],
        ]);

        for($i = 1; $i < 7; $i++ ) {
            Area::create([        
                'region' => FormValue::region[1],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }

        for($i = 7; $i < 14; $i++ ) {
            Area::create([        
                'region' => FormValue::region[2],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }

        for($i = 14; $i < 24; $i++ ) {
            Area::create([        
                'region' => FormValue::region[3],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }


        for($i = 24; $i < 30; $i++ ) {
            Area::create([        
                'region' => FormValue::region[4],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }

        for($i = 30; $i < 35; $i++ ) {
            Area::create([        
                'region' => FormValue::region[5],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }

        for($i = 35; $i < 39; $i++ ) {
            Area::create([        
                'region' => FormValue::region[6],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }

        for($i = 39; $i <47; $i++ ) {
            Area::create([        
                'region' => FormValue::region[7],
                'prefecture' => FormValue::prefecture[$i],
            ]);
        }
    }
}
