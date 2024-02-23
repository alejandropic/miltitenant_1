<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //ror. video. PARA NUEVAS TABLAS
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

}
