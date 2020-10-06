<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'name',
        'module',
        'sFeedback',
        'lFeedback',
        'module_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function module(){
        return $this->belongsTo(Module::class);
    }
}
