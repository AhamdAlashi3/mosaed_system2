<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_datas', function (Blueprint $table) {
            $table->id();
            $table->string('masaqat',999)->nullable();
            $table->string('halaqt', 999)->nullable();
            $table->string('ID_person', 999)->nullable();
            $table->string('phone_number', 999)->nullable();
            $table->string('email', 999)->unique();
            $table->string('Name', 999);
            $table->date('Date');
            $table->string('Nationality');
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
        Schema::dropIfExists('student_datas');
    }
}
