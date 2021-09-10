<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectBilling extends Model
{
    use HasFactory;
    protected $table = 'project_billing';
    protected $fillable = [
        'user_id',
        'project_id',
        'project_name',
        'billing_date',
        'billing_status',
        'billing_hours',
    ];
}
