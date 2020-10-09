<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function posts(){
        return $this->hasMany(post::class);
    }
    public function grades(){
        return $this->hasMany(Grade::class);
    }
}
