<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BaseInformacion;

class BaseInformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        BaseInformacion::create([
            'nombre_base' =>  'Excel1',
            'descripcion_base' => 'Informacion Geografica',
            'sector_industri_base' => 'Geografia',
            ]);

        BaseInformacion::create([
            'nombre_base' =>  'Excel2',
            'descripcion_base' => 'Informacion Taxi',
            'sector_industri_base' => 'Taxi',
            ]);
    }
}
