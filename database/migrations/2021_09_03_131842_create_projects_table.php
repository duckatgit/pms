<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('project_logo');
            $table->string('project_name');
            $table->string('project_technology');
            $table->string('about_project');
            $table->string('assigned_to');
            $table->string('assigned_by');
            $table->string('date');
            $table->string('month');
            $table->string('project_url');
            $table->string('project_username');
            $table->string('project_password');
            $table->string('all_credentials');
            $table->bigInteger('total_hours');
            $table->bigInteger('progress_number');
            $table->string('status');
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
        Schema::dropIfExists('projects');
    }
}
