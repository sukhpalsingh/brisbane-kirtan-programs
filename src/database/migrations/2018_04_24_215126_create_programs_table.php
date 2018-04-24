<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->timeTz('start_time');
            $table->timeTz('end_time');
            $table->string('person_name', 100);
            $table->string('house_no', 100);
            $table->string('street', 100);
            $table->string('suburb', 100);
            $table->integer('postcode');
            $table->string('state', 3);
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
        Schema::dropIfExists('programs');
    }
}
