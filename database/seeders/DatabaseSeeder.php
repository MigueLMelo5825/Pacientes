<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipodocu')->insert([
            ['CodiTipo' => 'CC', 'NombTipo' => 'Cedula'],
            ['CodiTipo' => 'TI', 'NombTipo' => 'Tarjeta de Identidad'],
        ]);   

        \DB::table('codidepa')->insert([
            ['CodiDepa' => '01', 'NombDepa' => 'Valle'],
            ['CodiTipo' => '02', 'NombDepa' => 'Antioquia'],
            ['CodiTipo' => '03', 'NombDepa' => 'Tolima'],
            ['CodiTipo' => '04', 'NombDepa' => 'Risaralda'],
            ['CodiTipo' => '05', 'NombDepa' => 'Cundinamarca'],
        ]);   

        \DB::table('codimuni')->insert([
            ['CodiDepa' => '01', 'CodiMuni' => '001', 'NombMuni' => 'Cali'],
            ['CodiDepa' => '01', 'CodiMuni' => '002', 'NombMuni' => 'Palmira'],
            ['CodiDepa' => '02', 'CodiMuni' => '003', 'NombMuni' => 'Medellin'],
            ['CodiDepa' => '02', 'CodiMuni' => '004', 'NombMuni' => 'Envigado'],
            ['CodiDepa' => '03', 'CodiMuni' => '005', 'NombMuni' => 'Ibague'],
            ['CodiDepa' => '03', 'CodiMuni' => '006', 'NombMuni' => 'Cajamarca'],
            ['CodiDepa' => '04', 'CodiMuni' => '007', 'NombMuni' => 'Pereira'],
            ['CodiDepa' => '04', 'CodiMuni' => '008', 'NombMuni' => 'Armenia'],
            ['CodiDepa' => '05', 'CodiMuni' => '009', 'NombMuni' => 'Bogota'],
            ['CodiDepa' => '05', 'CodiMuni' => '010', 'NombMuni' => 'Guaduas'],
        ]); 

        \DB::table('pacientes')->insert([

        	['TipoDocu' => 'CC','NumeDocu' => '1110587126','Nombre1' => 'Miguel','Nombre2' => 'Fernando','Apellido1' => 'Melo','Apellido2' => 'Caicedo','GeneUsua' => 'M','CodiDepa' => '03','CodiMuni' => '006','profile_photo_path' => ''],
        	['TipoDocu' => 'CC','NumeDocu' => '23456785','Nombre1' => 'Cristiano','Nombre2' => 'Ronaldo','Apellido1' => 'Dos Santos','Apellido2' => 'Melo','GeneUsua' => 'M','CodiDepa' => '02','CodiMuni' => '003','profile_photo_path' => ''],
        	['TipoDocu' => 'CC','NumeDocu' => '24580658','Nombre1' => 'Nubia','Nombre2' => '','Apellido1' => 'Caicedo','Apellido2' => 'Muñoz','GeneUsua' => 'F','CodiDepa' => '04','CodiMuni' => '008','profile_photo_path' => ''],
        	['TipoDocu' => 'CC','NumeDocu' => '245689054','Nombre1' => 'Paula','Nombre2' => 'Andrea','Apellido1' => 'Melo','Apellido2' => 'Caicedo','GeneUsua' => 'F','CodiDepa' => '04','CodiMuni' => '007','profile_photo_path' => ''],
        	['TipoDocu' => 'CC','NumeDocu' => '67859433','Nombre1' => 'Megan','Nombre2' => 'Mamasita','Apellido1' => 'Fox','Apellido2' => 'Melo','GeneUsua' => 'F','CodiDepa' => '01','CodiMuni' => '001','profile_photo_path' => ''],
        ]); 

        \DB::table('idengene')->insert([
            ['CodiGene' => 'M', 'NombGene' => 'Masculino'],
            ['CodiGene' => 'F', 'NombGene' => 'Femenino'],
        ]);
    }
}
