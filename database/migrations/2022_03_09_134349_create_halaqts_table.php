<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalaqtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaqts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masaqat_id');
            $table->string('name', 999);
            // $table->string('section',300);
            $table->foreign('masaqat_id')->references('id')->on('masaqats')->onDelete('cascade');
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
        Schema::dropIfExists('halaqts');
    }
}
