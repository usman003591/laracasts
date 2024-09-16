<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    public function jobs()
    {                                          //custom pivot table name
        return $this->belongsToMany(Job::class, 'job_tags',  relatedPivotKey: 'jobs_listings_id');
    }
}
