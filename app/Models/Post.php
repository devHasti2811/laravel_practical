<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory , softDeletes;

    protected $fillable = ['title', 'content', 'image', 'user_id'];


    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
