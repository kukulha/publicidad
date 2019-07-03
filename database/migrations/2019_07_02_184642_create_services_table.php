<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('stage_id')->unsigned();

            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->mediumText('subtitle')->nullable();
            $table->text('description');
            $table->string('file')->nullable();
            $table->string('file2')->nullable();
            $table->timestamps();

            //Relations

            $table->foreign('stage_id')->references('id')->on('stages')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
