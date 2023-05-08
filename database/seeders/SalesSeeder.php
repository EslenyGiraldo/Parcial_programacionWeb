<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BD:: table(sales)->insert([
            'nombre_vendedor'=> 'Alexander',
            'nombre_cliente'=>'Esteban',
            'nombre_producto'=>'producto1',
            'precio'=>'10000',
            'fecha_compra'=>'10-03-2023' ]);
    }
}
