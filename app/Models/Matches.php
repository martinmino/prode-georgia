<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matches extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "matches";

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
