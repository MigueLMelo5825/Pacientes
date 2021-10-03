<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IdenGene', function (Blueprint $table) {
            $table->Char('CodiGene',2)->comment('Codigo de Genero')->collation('latin1_swedish_ci');
            $table->string('NombGene',30)->comment('Nombre de Genero')->collation('latin1_swedish_ci');
            $table->primary('CodiGene');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('IdenGene');
    }
}
