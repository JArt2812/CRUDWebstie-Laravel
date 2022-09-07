<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'project_name';  
    public $timestamps = false;
    protected $table = "project";
}
