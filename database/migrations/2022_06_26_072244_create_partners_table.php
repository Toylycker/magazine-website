<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->index()->nullable();
            $table->foreign('type_id')->references('id')->on('types')->nullOnDelete();
            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('name_ru');
            $table->string('address')->nullable();
            $table->integer('sort_order')->nullable();
            $table->text('description')->nullable();
            $table->text('description_ru')->nullable();
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
        Schema::dropIfExists('partners');
    }
};
