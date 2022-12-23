<?php

namespace App\Models;

use App\Models\Feed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'feed_id',
        'user_id',
        'content',
    ];

    protected $guarded = ['id'];

    public function feed()
    {
        return $this->belongsTo(Feed::class, 'feed_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
