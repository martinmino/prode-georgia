<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pronostic extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "pronostics";
    /**
     * Get the user that owns the Pronostic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function Partido()
    {
        return $this->hasOne('App\Models\Matches', 'id');
    }
}
