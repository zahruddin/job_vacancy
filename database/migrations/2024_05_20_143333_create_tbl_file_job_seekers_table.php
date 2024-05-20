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
        Schema::create('tbl_file_job_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbl_job_seeker_id')->constrained()->onDelete('cascade');
            $table->string('cv');
            $table->string('certificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_file_job_seekers');
    }
};
