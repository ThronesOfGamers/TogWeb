<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GamesMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'member_id',
    ];
    public function members(): HasMany
    {
        return $this->hasMany(Membres::class, 'members_id');
    }
    public function games(): HasMany
    {
        return $this->hasMany(Games::class, 'games_id');
    }
}
