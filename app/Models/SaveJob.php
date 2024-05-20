<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'tbl_job_seeker_id',
        'tbl_job_id',
    ];

    /**
     * Get the job seeker that saved the job.
     */
    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'tbl_job_seeker_id');
    }

    /**
     * Get the saved job.
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'tbl_job_id');
    }
}
