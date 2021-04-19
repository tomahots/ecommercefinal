<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Imagen;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idXboxSeriesX      = Producto::where('nombre','Xbox Series X')->first();
        $idPlayStation      = Producto::where('nombre','PlayStation 5')->first();
        $idNintendoSwich    = Producto::where('nombre','Nintendo Swich')->first();
        $idNintendo64       = Producto::where('nombre','Nintendo 64')->first();
        $idGameCube         = Producto::where('nombre','Game Cube')->first();
        $idPlayStation4     = Producto::where('nombre','PlayStation 4')->first();
        $idXboxOne          = Producto::where('nombre','Xbox One')->first();




        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fxbox.fandom.com%2Fwiki%2FXbox_Series_X&psig=AOvVaw1bG7ghvEnz69fBZw4JgY_Q&ust=1618592121792000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLiI-NbbgPACFQAAAAAdAAAAABAD",
            "producto_id" => $idXboxSeriesX->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnDAmA9SDFGE1rWvG-e4qB3yez_qTZ5FvHwQ&usqp=CAU",
            "producto_id" => $idXboxSeriesX->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>"https://sm.ign.com/ign_es/news/m/microsoft-/microsoft-expects-xbox-series-xs-shortages-to-continue-into_h9sw.jpg",
            "producto_id" => $idXboxSeriesX->id
        ]);

        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" => 
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScst_y1u_RO8iDXDBUpElOjgbHUnOCUfw5wA&usqp=CAU",
            "producto_id" => $idPlayStation->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" => 
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXGZdF9_F_h0MYThV72AilOF6tVhaRHs2quQ&usqp=CAU",
            "producto_id" => $idPlayStation->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" => 
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMkXo1ymEjBFM0mcDmv8PLA0rUdknxhCjuKg&usqp=CAU",
            "producto_id" => $idPlayStation->id
        ]);


        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxcIYmFd66NfnJVvOAhwaLYJGYAY-GvAgZJg&usqp=CAU",
                "producto_id" => $idNintendoSwich->id,
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKhDKiPdqRCHOcIt1l0YiFpta6ZvA-xZLX2g&usqp=CAU",
                "producto_id" => $idNintendoSwich->id,
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4piVZ0Tnty3G6NVnu10CbCUeKTlYfCdMd9w&usqp=CAU",
                "producto_id" => $idNintendoSwich->id,
        ]);

        
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxjHnmtwhoai2EModJaLuXrmJGNglgTPoncA&usqp=CAU",
            "producto_id" => $idNintendo64->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmyh0nam2aVAX60WVYjn_4Oo28k33KCsZujg&usqp=CAU",
            "producto_id" => $idNintendo64->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsXTWGiADkfzybzx24Xb70wNFWDwXbYoIMxw&usqp=CAU",
            "producto_id" => $idNintendo64->id
        ]);


        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrnR4yke_WhAO4zJMXOTK_-lTp30tM9GFcIg&usqp=CAU",
            "producto_id" => $idGameCube->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNkeWYP8wT_7iuLn9ox_IzkonCXkdW39ZILQ&usqp=CAU",
            "producto_id" => $idGameCube->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWGRNFboHbN1Fw8NS2Yfa0h2fFdLFCUs-JSg&usqp=CAU",
            "producto_id" => $idGameCube->id
        ]);


        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" => 
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU1VzPRl3tR_0ycsZj-fS9Hp6zbJmqEo34_A&usqp=CAU",
            "producto_id" => $idPlayStation4->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" => 
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPj1lSEPHVLzxPaFQ8GaLBwXm3VvYewOphYg&usqp=CAU",
            "producto_id" => $idPlayStation4->id
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" => 
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLKC_uA_WaNKkCz_2eBGHRs4K8Qo3QLIa-wg&usqp=CAU",
            "producto_id" => $idPlayStation4->id
        ]);



        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlnQ7_tNAAkQ5kyBWyjJ1IcTKm7LjB8GeTdw&usqp=CAU",
            "producto_id" => $idXboxOne->id,
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgeQG967_nqdYa75hCczQ4HWGYPp0gCucz9w&usqp=CAU",
            "producto_id" => $idXboxOne->id,
        ]);
        Imagen::create([
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
            "url" =>
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFi4rkBIt8rrMeB37NtYbQ9CCPDKLWLAZYBQ&usqp=CAU",
            "producto_id" => $idXboxOne->id,
        ]);
    }
}
