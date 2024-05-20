<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'company_address',
        'company_website',
        'company_phone',
        'company_description',
        'tbl_industrys_id',
        'company_logo',
    ];

    /**
     * Get the user that owns the company.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the industry that the company belongs to.
     */
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'tbl_industrys_id');
    }
}
