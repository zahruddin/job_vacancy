<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblJobSeeker extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_seeker_name',
        'job_seeker_address',
        'job_seeker_phone',
        'job_seeker_resume',
        'profile_picture',
    ];

    /**
     * Get the user that owns the job seeker.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
