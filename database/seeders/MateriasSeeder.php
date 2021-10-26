<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'nombre' => 'Programacion',
            'claveMateria' => 'I5882',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Programacion',
            'claveMateria' => 'I5883',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Matematica Discreta',
            'claveMateria' => 'I5892',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Metodos Matematicos I',
            'claveMateria' => 'I5893',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Metodos Matematicos I',
            'claveMateria' => 'I5882',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Estructuras de Datos I',
            'claveMateria' => 'I5886',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Estructuras de Datos I',
            'claveMateria' => 'I5887',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Teoria de la computacion',
            'claveMateria' => 'I5915',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Metodos Matematicos II',
            'claveMateria' => 'I5895',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Metodos Matematicos II',
            'claveMateria' => 'I5896',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Estructuras de Datos II',
            'claveMateria' => 'I5888',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Estructuras de Datos II',
            'claveMateria' => 'I5889',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Administracion de Redes',
            'claveMateria' => 'I5907',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Algoritmia',
            'claveMateria' => 'I5884',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Algoritmia',
            'claveMateria' => 'I5885',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Estadistica y Procesos Estocasticos',
            'claveMateria' => 'I5897',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Bases de Datos',
            'claveMateria' => 'I5890',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Bases de Datos',
            'claveMateria' => 'I5891',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Administracion de Servidores',
            'claveMateria' => 'I5908',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Hipermedia',
            'claveMateria' => 'I5910',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Ingenieria de Software I',
            'claveMateria' => 'I5898',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Ingenieria de Software I',
            'claveMateria' => 'I5899',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Control de Proyectos',
            'claveMateria' => 'I5901',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seguridad de la Informacion',
            'claveMateria' => 'I5905',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Programacion para Internet',
            'claveMateria' => 'I5909',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Ingenieria de Software II',
            'claveMateria' => 'I5882',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Uso, Adaptacion y Explotacion de Sistemas Operativos',
            'claveMateria' => 'I5903',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Uso, Adaptacion y Explotacion de Sistemas Operativos',
            'claveMateria' => 'I5904',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Almacenes de Datos',
            'claveMateria' => 'I5906',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Administracion de Base de Datos',
            'claveMateria' => 'I5902',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Mineria de Datos',
            'claveMateria' => 'I5911',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Sistemas Basados en Conocimientos',
            'claveMateria' => 'I5913',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Seminario de Solucion de Problemas de Sistemas Basados en Conocimiento',
            'claveMateria' => 'I5914',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'Clasificacion Inteligente de Datos',
            'claveMateria' => 'I5912',
        ]);
    }
}
