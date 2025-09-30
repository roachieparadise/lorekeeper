<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyHarvestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_harvest', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('daily_id')->unsigned();


            $table->integer('size')->unsigned()->default(400);
            $table->string('alignment')->default('center');

            $table->boolean('has_harvest_image')->default(0);
            
            $table->string('text_orientation')->nullable()->default('curved');
            $table->integer('text_fontsize')->nullable()->default(24);


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_harvest');

        Schema::table('daily', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}

