<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $timestamps = true;

    // fillable are the fields in the database that a user can fill
    protected $fillable = [
        'name',
        'introduction',
        'created_at',
        'location',
        
    ];

}
