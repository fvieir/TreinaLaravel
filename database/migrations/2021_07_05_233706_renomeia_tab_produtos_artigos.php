<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenomeiaTabProdutosArtigos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artigos', function (Blueprint $table) {
           Schema::rename('produtos','artigos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artigos', function (Blueprint $table) {
            Schema::rename('artigos','produtos');
        });
    }
}
