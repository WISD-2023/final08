<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
    ];
    protected $casts = [
        'user_id' => 'string',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
