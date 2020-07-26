<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('abstract');
            $table->longText('body');
            $table->integer('stars');
            $table->integer('restaurants');
            $table->integer('bars');
            $table->integer('pools');
            $table->integer('price');
            $table->enum('raiting', ['poor','fair','good','very good','excellent']);
            $table->boolean('all_inclusive');
            $table->integer('category_id'); // foreign key (category = country)
            $table->softDeletes(); // tels laravel we be using soft deletes
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
        Schema::dropIfExists('hotels');
    }
}
