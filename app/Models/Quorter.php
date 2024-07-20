<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quorter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'n_av'
    ];
    protected $table =  'city_ref.quorters';
    public function avs () : HasMany
    {
        return $this->hasMany(Av::class);
    }
}
