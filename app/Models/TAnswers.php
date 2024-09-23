<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAnswers extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_outline',
        'project_start',
        'project_end',
        'prog_langs',
        'framework',
        'task_outline',
        'task_schedule',
        'work_style',
    ];
}
