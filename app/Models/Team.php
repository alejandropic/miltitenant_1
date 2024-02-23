<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//ror.video.
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    //ror. video.
    protected $fillable = ['name', 'slug'];

    //ror. video.
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    //ror. video. PARA NUEVAS TABLAS    
    public function customers(): HasMany
    {
        return $this->HasMany(Customer::class);
    }

}
