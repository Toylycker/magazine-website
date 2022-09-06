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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id')->index()->nullable();
            $table->foreign('worker_id')->references('id')->on('workers')->cascadeOnDelete();
            $table->unsignedBigInteger('partner_id')->index()->nullable();
            $table->foreign('partner_id')->references('id')->on('partners')->cascadeOnDelete();
            $table->unsignedBigInteger('blog_id')->index()->nullable();
            $table->foreign('blog_id')->references('id')->on('blogs')->cascadeOnDelete();
            $table->integer('sort_order')->nullable();
            $table->string('name');
            $table->string('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
};
