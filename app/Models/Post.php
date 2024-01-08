<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'is_feature',
        'poster'
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
}
