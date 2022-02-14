<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('student_id');
            $table->date('date');
            $table->dateTime('wakeup_time')->comment('起床時間');
            $table->dateTime('bed_time')->comment('就寝時間');
            $table->unsignedFloat('night_temp')->comment('夜の体温');
            $table->unsignedFloat('morning_temp')->comment('朝の体温');
            $table->boolean('q1');
            $table->boolean('q2');
            $table->boolean('q3');
            $table->boolean('q4');
            $table->boolean('q5');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
