<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'caption',
        'picture_path',
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
