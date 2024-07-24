<?php
namespace App\Services;
use App\Models\Collect;
use App\Models\Zone;
class MatchCollect
{
    static function matches ()
    {
        $user = auth()->user();
        
        if ($user) {
            $zone = Zone::where('name',$user->zone)->first('id');
            return Collect::where([
                                ['zone_id',$zone->id],
                                ['quorter',$user->quorter],
                                ['av',$user->av]
                            ])->latest()->first('date');
        }
        // nous utiliserons la géo-localisation pour calculer la proximité de l'appareil utilisateur
        return Collect::latest()->first();
    }
    
}