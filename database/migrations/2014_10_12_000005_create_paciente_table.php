<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pacientes', function (Blueprint $table) {
            $table->Char('TipoDocu',2)->comment('Tipo de Documento')->collation('latin1_swedish_ci');
            $table->string('NumeDocu',11)->comment('Numero de Documento')->collation('latin1_swedish_ci');
            $table->string('Nombre1')->comment('primer Nombre')->collation('latin1_swedish_ci');
            $table->string('Nombre2')->nullable()->comment('Segundo Nombre')->collation('latin1_swedish_ci');
            $table->string('Apellido1')->comment('Primer Apellido')->collation('latin1_swedish_ci');
            $table->string('Apellido2')->nullable()->comment('Segundo Apellido')->collation('latin1_swedish_ci');
            $table->Char('GeneUsua',2)->comment('Genero')->collation('latin1_swedish_ci');
            $table->Char('CodiDepa',2)->comment('Codigo de Departamento')->collation('latin1_swedish_ci');
            $table->Char('CodiMuni',3)->comment('Codigo de Municipio')->collation('latin1_swedish_ci');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->primary(['TipoDocu', 'NumeDocu']);
            $table->index(['CodiDepa', 'CodiMuni']);
            $table->index(['TipoDocu', 'NumeDocu']);
            $table->foreign('TipoDocu')->references('CodiTipo')->on('tipodocu');
            $table->foreign(['CodiDepa','CodiMuni'])->references(['CodiDepa','CodiMuni'])->on('codimuni');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pacientes');
    }
}
