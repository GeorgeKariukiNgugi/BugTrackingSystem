<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstLineSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_line_supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bug_id')->nullable();
            $table->foreign('bug_id')->references('id')->on('bugs');
            $table->unsignedBigInteger('firstLineSupport_id');
            $table->foreign('firstLineSupport_id')->references('id')->on('users');
            $table->boolean('approval');
            $table->text('reason');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_line_supports');
    }
}
