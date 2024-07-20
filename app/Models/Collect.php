<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Collect extends Model
{
    use HasFactory;
    protected $table = 'waste.collects';
    protected $fillable = [
        'quorter',
        'user_id',
        'av',
        'date'
    ];

    public function planedForZone () : BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }
    public function planedBy () : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function planedForQuorter () : BelongsTo
    // {
    //     return $this->belongsTo(Quorter::class);
    // }
    // public function planedForAv () : BelongsTo
    // {
    //     return $this->belongsTo(Av::class);
    // }
}
