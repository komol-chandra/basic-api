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
            $table->foreignId("class_id")->nullable()->constrained("student_classes", "id")->onDelete("cascade");
            $table->foreignId("sections_id")->nullable()->constrained("sections", "id")->onDelete("cascade");
            $table->string('name');
            $table->string('phone');
            $table->string('gmail');
            $table->integer('gender');
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
