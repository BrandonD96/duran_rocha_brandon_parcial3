<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Codigo;
use Illuminate\Support\Facades\DB;

class registrarCodigos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        include 'codigos_postales.php';
        foreach($codigos_postales as $cp){
        DB::table('codigo_postales')->insert([
        'Id' => $cp["Id"],
        'codigo' => $cp["codigo"],
        'asentamiento' => $cp["asentamiento"],       
        'tipo_asenta' => $cp["tipo_asenta"],
        'municipio' => $cp["municipio"],
        'estado' => $cp["estado"],
        'ciudad' => $cp["ciudad"],]);
    }
}
}