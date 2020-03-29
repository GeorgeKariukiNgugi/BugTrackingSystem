<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_approvals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bug_id')->nullable();
            $table->foreign('bug_id')->references('id')->on('bugs');
            $table->unsignedBigInteger('leadApproval_id');
            $table->foreign('leadApproval_id')->references('id')->on('users');
            $table->unsignedBigInteger('firstLineSupport_id')->nullable();
            $table->foreign('firstLineSupport_id')->references('id')->on('users');
            $table->boolean('approval');
            $table->text('reason');
            $table->date('expected_fixing_date');
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
        Schema::dropIfExists('lead_approvals');
    }
}
