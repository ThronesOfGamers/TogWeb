<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        'category_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class , 'category_id', 'id');
    }

    public static function getNewsByCategoryCount()
    {
        return static::query()
            ->select('category_id', DB::raw('count(*) as news_count'))
            ->groupBy('category_id')
            ->with('category')
            ->get();
    }


}
