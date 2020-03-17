<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PriceModel;

class CreateItemsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pictureFileName');
            $table->unsignedFloat('price');
            $table->timestamps();
        });

        Schema::create('runes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pictureFileName');
            $table->string('bonus');
            $table->unsignedFloat('price');
            $table->timestamps();
        });

        Schema::create('prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pictureFileName');
            $table->string('code');
            $table->unsignedFloat('price');
            $table->enum('state', array_keys(PriceModel::STATES));
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
        Schema::dropIfExists('chests');
        Schema::dropIfExists('runes');
        Schema::dropIfExists('prices');
    }
}
