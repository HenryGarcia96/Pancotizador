<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create(['clave'=>'001','nombre'=>'Pan de queso de poro', 'descripcion'=>'Pan de masa madre rellenada con queso poro Usumacinta', 'precio' => '9.99', 'imagen'=>'without']);

    }
}
