<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();  // ID del medicamento
            $table->string('nombre');  // Nombre del medicamento
            $table->string('presentacion');  // Forma de presentación (ej. tabletas, ampollas)
            $table->integer('cantidad');  // Cantidad por presentación
            $table->decimal('precio', 8, 2);  // Precio del medicamento
            $table->string('laboratorio');  // Laboratorio fabricante
            $table->date('fecha_caducidad');  // Fecha de caducidad
            $table->string('lote')->nullable();  // Número de lote (opcional)
            $table->text('descripcion')->nullable();  // Descripción adicional del medicamento
            $table->timestamps();  // Campos created_at y updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
