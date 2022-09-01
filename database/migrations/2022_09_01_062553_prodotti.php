<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prodotti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotti', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->float('prezzo', 6,2);
            $table->text('descrizione');
            $table->boolean('visible')->default(0);
            $table->longText('extras');
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
        Schema::dropIfExists('prodotti');
    }
}
