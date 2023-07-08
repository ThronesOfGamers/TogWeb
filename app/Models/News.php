<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title',
        'Content',
        'Picture',
        'Author',
        'Date',
    ];
    public function sections(): BelongsTo
    {
        return $this->belongsTo(User::class, 'User_id');
    }
}
