<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
    use HasFactory;

    protected $table = 'collects';

    protected $fillable = [
        'title',
        'content',
        'is_feature',
        'poster',
        'collected'
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
