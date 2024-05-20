<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tbl_company_id',
        'job_title',
        'tbl_categorys_id',
        'job_deskripsi',
        'job_location',
        'job_skills',
        'tbl_job_types_id',
        'job_status',
    ];

    /**
     * Get the company that owns the job.
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'tbl_company_id');
    }

    /**
     * Get the category associated with the job.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'tbl_categorys_id');
    }

    /**
     * Get the job type associated with the job.
     */
    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'tbl_job_types_id');
    }
}
