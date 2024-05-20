<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'tbl_job_seeker_id',
        'tbl_jobs_id',
        'category_name',
        'status',
    ];

    /**
     * Get the job seeker that applied for the job.
     */
    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'tbl_job_seeker_id');
    }

    /**
     * Get the job that was applied for.
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'tbl_jobs_id');
    }
}
