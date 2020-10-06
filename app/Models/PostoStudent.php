<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostoStudent extends Model
{
    use HasFactory;
    protected $table = 'posto_student';
    protected $fillable = [
        'full_name',
        'module',
        'post'
    ];
}
