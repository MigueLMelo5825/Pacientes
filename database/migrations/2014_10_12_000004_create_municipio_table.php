<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CodiMuni', function (Blueprint $table) {
            $table->Char('CodiDepa',2)->comment('Codigo Departamento')->collation('latin1_swedish_ci');
            $table->Char('CodiMuni',3)->comment('Codigo Municipio')->collation('latin1_swedish_ci');
            $table->String('NombMuni',40)->comment('Codigo Municipio')->collation('latin1_swedish_ci');
            $table->primary(['CodiDepa','CodiMuni']);
            $table->index('CodiDepa');
            $table->foreign('CodiDepa')->references('CodiDepa')->on('CodiDepa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CodiMuni');
    }
}
