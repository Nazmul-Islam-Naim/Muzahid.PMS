<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryAggriment extends Model
{
    use HasFactory;
    protected $table = 'country_aggriments';
    protected $fillable = [ 'country_id', 'title', 'doc' ];

    // relations
    public function country() {
        return $this->belongsTo(Country::class);
    }
}
