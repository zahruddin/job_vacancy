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
        Schema::create('tbl_apply_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbl_job_seeker_id')->constrained()->onDelete('cascade');
            $table->foreignId('tbl_jobs_id')->constrained()->onDelete('cascade');
            $table->string('category_name');
            $table->enum('status', ['inprogress', 'accepted', 'rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_apply_jobs');
    }
};
