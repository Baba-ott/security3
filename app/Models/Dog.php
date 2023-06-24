<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'breed',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
