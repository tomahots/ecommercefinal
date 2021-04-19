<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->charset ='utf8mb4';
            $table->id();
            $table->timestamps();
            $table->enum('metodo_pago',['debit_card','credit_card', 'paypal', 'cryptocurrencies'])->default('debit_card');
            $table->enum('estado_pago',['failed','cancelled', 'created', 'pending', 'efunded'])->default('pending');
            $table->string('precio_final');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
