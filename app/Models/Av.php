<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Av extends Model
{
    use HasFactory;
    protected $fillable = [
        'number'
    ];
    protected $table =  'city_ref.avs';

    public function zone () : BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }
    public function quorter () : BelongsTo
    {
        return $this->belongsTo(Quorter::class);
    }
}
