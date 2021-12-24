<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('featured_image');
            $table->string('price');
            $table->text('overview');
            $table->longText('short_description');
            $table->longText('long_description');
            $table->integer('type');
            $table->boolean('service_type')->comment('sell or buy');
            $table->integer('bathroom')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('net_area')->nullable();
            $table->boolean('pool')->nullable();
            $table->foreignId('location_id')->constrained();
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
        Schema::dropIfExists('properties');
    }
}
