<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "Xbox Series X",
            "descripcion" => "Es una línea de videoconsolas de sobremesa desarrolladas por Microsoft y la cuarta generación de la familia de consolas Xbox.",
            "precio" => 1500000,
            "puntuacion" => 5,
            "disponibilidad" => 1,
        ]);

        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "PlayStation 5",
            "descripcion" => "Es una consola de videojuegos de sobremesa desarrollada por la empresa Sony Interactive Entertainment. ",
            "precio" => 15000000,
            "puntuacion" => 5,
            "disponibilidad" => 1,
        ]);

        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "Nintendo Swich",
            "descripcion" => "Es la novena consola de videojuegos principal desarrollada por Nintendo. ",
            "precio" => 1500000,
            "puntuacion" => 3,
            "disponibilidad" => 1,
        ]);

        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "Nintendo 64",
            "descripcion" => "Es la cuarta videoconsola de sobremesa producida por Nintendo",
            "precio" => 500000,
            "puntuacion" => 2,
            "disponibilidad" => 1,
        ]);

        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "Game Cube",
            "descripcion" => "También llamada simplemente GameCube y abreviada como GCN en América y NGC en Japón, es la quinta consola de sobremesa hecha por Nintendo. .",
            "precio" => 500000,
            "puntuacion" => 4,
            "disponibilidad" => 1,
        ]);

        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "PlayStation 4",
            "descripcion" => "Es la segunda consola de Sony en ser diseñada por Mark Cerny y forma parte de las videoconsolas de octava generación. ",
            "precio" => 1000000,
            "puntuacion" => 5,
            "disponibilidad" => 1,
        ]);

        Producto::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "nombre" => "Xbox One",
            "descripcion" => "Es la tercera videoconsola de sobremesa de la marca Xbox, producida por Microsoft.  ",
            "precio" => 1000000,
            "puntuacion" => 3,
            "disponibilidad" => 1,
        ]);
    }
}