<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'reg_no',
        'username',
        'password'
    ];

    public function modules(){
        return $this->belongsToMany(Module::class);
    }

    public function url()
    {
    	return route('students.show', $this->id);
    }
}
