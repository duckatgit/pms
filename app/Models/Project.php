<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'user_id',
        'project_logo',
        'project_name',
        'project_technology',
        'about_project',
        'assigned_to',
        'assigned_by',
        'date',
        'month',
        'project_url',
        'project_username',
        'project_password',
        'all_credentials',
        'total_hours',
        'progress_number',
        'status',
    ];
}
