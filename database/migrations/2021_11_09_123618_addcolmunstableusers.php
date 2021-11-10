<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addcolmunstableusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', (Blueprint $table)) {
            $table->numeric('telefono', 100)->nullable(
            $table->string('sitio')->nullable();
            $table->string('biografia')->nullable();
            $table->string('sexo')->nullable();
            $table->string('imagen')->nullable();
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('telefono');
        $table->dropColumn('sitio');
        $table->dropColumn('biografia');
        $table->dropColumn('sexo');
        $table->dropColumn('imagen');
    }
}
