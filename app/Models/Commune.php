<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'n_zones'
    ];
    protected $table =  'city_ref.communes';
    public function zones () : HasMany
    {
        return $this->hasMany(Zone::class);
    }
}
