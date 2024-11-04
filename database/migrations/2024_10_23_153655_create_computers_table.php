<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //SE ANEXA 2 CAMPOS ADICIONALES A LA TABLA computers
Schema::create('computers', function (Blueprint $table) {
    $table->id();
    $table->string('model');
    $table->string('mark');
    $table->integer('size');
    $table->timestamp('published_at')->nullable();; //campo extra
    $table->boolean('is_active');      //campo extra
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
}
