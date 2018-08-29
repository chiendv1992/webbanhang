<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');            
            $table->unsignedInteger('subcate_id')->unsigned(); 
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('content');            
            $table->text('description');
            $table->string('price');
            $table->string('sale');
            $table->dateTime('tosale');
            $table->dateTime('fromsale');
            $table->string('image');
            $table->string('qty');
            $table->foreign('subcate_id')->references('id')->on('subcategory');
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
        Schema::dropIfExists('product');
    }
}
