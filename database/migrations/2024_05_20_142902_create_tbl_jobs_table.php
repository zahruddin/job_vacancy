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
        Schema::create('tbl_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbl_company_id')->constrained()->onDelete('cascade');
            $table->string('job_title');
            $table->foreignId('tbl_categorys_id')->constrained()->onDelete('cascade');
            $table->string('job_deskripsi')->nullable();
            $table->string('job_location')->nullable();
            $table->text('job_skills')->nullable();
            $table->foreignId('tbl_job_types_id')->constrained()->onDelete('cascade');
            $table->enum('job_status', ['active', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_jobs');
    }
};
