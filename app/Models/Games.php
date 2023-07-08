<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'picture',
    ];
    public function gamesmembers(): HasMany
    {
        return $this->hasMany(GamesMembers::class, 'gamesMember_id');
    }

}
