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
            $table->boolean('q1')->comment('咳');
            $table->boolean('q2')->comment('息苦しさ');
            $table->boolean('q3')->comment('だるさ');
            $table->boolean('q4')->comment('食欲減');
            $table->boolean('q5')->comment('通院');
            $table->text('comment')->nullable();
            $table->dateTime('checked_at')->nullable();
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
