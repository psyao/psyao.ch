<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'educations',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug');
                $table->string('title');
                $table->date('from');
                $table->date('to');
                $table->boolean('current')->default(false);
                $table->string('school');
                $table->string('location');
                $table->string('degree')->nullable();
                $table->string('field');
                $table->string('grade')->nullable();
                $table->string('activities')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('educations');
    }
}
