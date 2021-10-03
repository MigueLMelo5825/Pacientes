<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TipoDocu', function (Blueprint $table) {
            $table->Char('CodiTipo',2)->comment('Codigo de Tipo de Documento')->collation('latin1_swedish_ci');
            $table->string('NombTipo',30)->comment('Nombre de Documento')->collation('latin1_swedish_ci');
            $table->primary('CodiTipo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TipoDocu');
    }
}
