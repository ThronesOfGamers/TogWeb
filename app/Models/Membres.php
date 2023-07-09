<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Membres extends Model
{
    use HasFactory;

    protected $fillable = [
        'pseudo',
        'grade',
        'description',
        'entryDate',
        'endDate',
        'picture',

    ];
    public function gamesmembers(): HasMany
    {
        return $this->hasMany(GamesMembers::class, 'member_id');
    }




}
