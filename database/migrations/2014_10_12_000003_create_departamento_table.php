<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CodiDepa', function (Blueprint $table) {
            $table->Char('CodiDepa',2)->comment('Codigo Departamento')->collation('latin1_swedish_ci');
            $table->String('NombDepa',40)->comment('Nombre de Departamento')->collation('latin1_swedish_ci');
            $table->primary('CodiDepa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CodiDepa');
    }
}
