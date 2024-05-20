<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileJobSeeker extends Model
{
    use HasFactory;
    protected $fillable = [
        'tbl_job_seeker_id',
        'cv',
        'certificate',
    ];

    /**
     * Get the job seeker associated with the file.
     */
    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'tbl_job_seeker_id');
    }
}
