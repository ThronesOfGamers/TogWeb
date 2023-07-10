<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'content',
        'picture',
        'author',
        'date_publish',
        'is_published',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
