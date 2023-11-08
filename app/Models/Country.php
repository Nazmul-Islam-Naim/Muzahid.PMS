<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = ['name','slug'];

    // relations
    public function countryAggriment() {
        return $this->hasMany(CountryAggriment::class);
    }
}
