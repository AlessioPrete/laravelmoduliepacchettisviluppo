<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuAndItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'menus' , function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->timestamps();
            });

        Schema::create( 'menuitems' , function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->string('link');
            $table->unsignedBigInteger('parent')->default(0);
            $table->integer('sort')->default(0);
            $table->string('class')->nullable();
            $table->unsignedBigInteger('menu');
            $table->integer('depth')->default(0);
            $table->timestamps();

            $table->foreign('menu')->references('id')->on('menus')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'menus' );
        Schema::dropIfExists( 'menuitems' );
    }
}
