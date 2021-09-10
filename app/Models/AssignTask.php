<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTask extends Model
{
    use HasFactory;
    protected $table = 'assign_task';
    protected $fillable = [
        'user_id',
        'project_id',
        'date',
        'task_name',
        'assigned_to',
        'estimate_time',
        'task_description',
    ];
}
