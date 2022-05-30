<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Match extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'date',
        'time',
        'group',
        'phase',
        'country1_id',
        'country2_id',
        'goals1',
        'goals2',
        'active_since',
        'is_over'
    ];

    /**
     * Get the country that owns the Match
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country1(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country1_id', 'id');
    }
    public function country2(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country2_id', 'id');
    }
}
