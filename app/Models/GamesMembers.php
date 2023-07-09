<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Membres;
use App\Models\Games;
use Illuminate\Support\Facades\DB;

class GamesMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'member_id',
    ];
    public function membres(): BelongsTo
    {
        return $this->belongsTo(Membres::class, 'member_id', 'id');
    }
    public function games(): BelongsTo
    {
        return $this->belongsTo(Games::class, 'game_id', 'id');
    }
    public static function getMembersByGameCount()
    {
        return static::query()
            ->select('game_id', DB::raw('count(*) as member_count'))
            ->groupBy('game_id')
            ->with('games')
            ->get();
    }

}
