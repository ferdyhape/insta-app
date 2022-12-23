<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'feed_id',
        'user_id',
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
