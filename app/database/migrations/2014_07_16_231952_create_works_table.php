<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'works',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug');
                $table->string('company');
                $table->string('title');
                $table->string('location');
                $table->date('from');
                $table->date('to')->nullable();
                $table->boolean('current')->default(false);
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
        Schema::drop('works');
    }
}