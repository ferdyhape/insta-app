<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'caption',
        'like',
        'picture_path',
    ];

    protected $guarded = ['id'];
    protected $attributes = [
        'like' => 0,
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'feed_id', 'id');
    }
    public function like_details()
    {
        return $this->hasMany(Comment::class, 'feed_id', 'id');
    }
}
