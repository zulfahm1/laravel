<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nis');
            $table->enum('gender',['l','p']);
            $table->enum('class',['10','11','12']);
            $table->text('address');
            $table->date('birth_date');
            $table->enum('majors',['i','s','a','b']); 
            $table->unsignedSmallInteger('height');
            $table->unsignedSmallInteger('weight');
            $table->UnsignedBigInteger('guardian_id');

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
        Schema::dropIfExists('students');
    }
}
