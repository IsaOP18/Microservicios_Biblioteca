<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::create([
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'genero' => 'Novela',
            'fecha_publicacion' => 1967,
            'estado' => 'disponible'
        ]);

        Libro::create([
            'titulo' => 'El amor en los tiempos del cólera',
            'autor' => 'Gabriel García Márquez',
            'genero' => 'Romance',
            'fecha_publicacion' => 1985,
            'estado' => 'disponible'
        ]);

        Libro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'genero' => 'Distopía',
            'fecha_publicacion' => 1949,
            'estado' => 'disponible'
        ]);

        Libro::create([
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'genero' => 'Clásico',
            'fecha_publicacion' => 1905,
            'estado' => 'disponible'
        ]);

        Libro::create([
            'titulo' => 'La sombra del viento',
            'autor' => 'Carlos Ruiz Zafón',
            'genero' => 'Misterio',
            'fecha_publicacion' => 2001,
            'estado' => 'disponible'
        ]);
    }
}
