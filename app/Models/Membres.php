<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Membres extends Model
{
    use HasFactory;

    protected $fillable = [
        'pseudo',
        'grade',
        'entryDate',
        'picture',
        'isActif',
    ];
    public function gamesmembers(): HasMany
    {
        return $this->hasMany(GamesMembers::class, 'gamesMember_id');
    }
}
