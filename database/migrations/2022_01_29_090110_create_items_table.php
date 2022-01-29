<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('explanation');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('stock');
            $table->bigInteger('time_sale_id')->unsigned();
            // $table->integer('genre_id');
            // $table->integer('size_id');
            // $table->foreign('genre_id')
            //     ->references('id')
            //     ->on('genre')
            //     ->onDelete('cascade');
            // $table->foreign('size_id')
            //     ->references('id')
            //     ->on('size')
            //     ->onDelete('cascade');
            $table->timestamps();
            $table->foreign('time_sale_id')
                ->references('id')
                ->on('time_sales')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
