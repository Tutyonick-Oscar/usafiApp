<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'n_quorters'
    ];
    protected $table = 'city_ref.zones';
    public function quorters () : HasMany
    {
        return $this->hasMany(Quorter::class);
    }
    public function avs () : HasMany
    {
        return $this->hasMany(Av::class);
    }
    public function collects () : HasMany
    {
        return $this->hasMany(Collect::class);
    }
}
