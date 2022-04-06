<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasaqatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masaqats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('masaq_name', 999);
            $table->date('Date_start');
            $table->date('Date_end');
            $table->string('Day');
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
        Schema::dropIfExists('masaqats');
    }
}
