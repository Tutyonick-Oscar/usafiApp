<?php

namespace App\Http\Controllers;
use SessionHandler;
use App\Models\Zone;
use App\Models\Commune;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsafiDemand extends Controller
{
    // public function sms () 
    // {
    //     $account_sid = getenv('TWILIO_ACCOUNT_SID');
    //     $auth_token = getenv('TWILIO_AUTH_TOKEN');
    //     $twilio_number = getenv('TWILIO_NUMBER');
    //     $client = new Client($account_sid, $auth_token);
    //     $client->messages->create(
    //         '+25762876562',
    //         array(
    //             'from' => $twilio_number,
    //             'body' => 'Bonjour Vous recevez ce sms depuis UsafiApp de MICROGELS !'
    //         )
    //     );
    // }
    public function create (){
        $s = SessionHandler::class;
        dd(Auth::user()->is_admin);
    //    $zone = Zone::where('name','ngagara')->first();
    //    //dd($zone);
    //    $zone->quorters()->create([
    //     'name' => 'quartier 10',
    //     'n_av' => 5,
    //    ]);
    }
}
