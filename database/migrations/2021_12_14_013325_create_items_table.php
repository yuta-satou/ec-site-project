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
            $table->varchar('name');
            $table->varchar('explanation');
            $table->varchar('price');
            $table->varchar('image');
            $table->varchar('stock');
            $table->bigIncrements('time_sale_id')
                ->references('id')
                ->on('time_sale')
                ->onDelete('cascade');
            $table->bigIncrements('genre_id')
                ->references('id')
                ->on('genre')
                ->onDelete('cascade');
            $table->bigIncrements('size_id')
                ->references('id')
                ->on('size')
                ->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
