<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('graduate_id');
            $table->unsignedBigInteger('job_id');
            $table->foreign('graduate_id')->references('id')->on('graduates');
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->date('FechaPostulacion');
            $table->string('Estado', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
