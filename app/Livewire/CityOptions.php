<?php

namespace App\Livewire;

use App\Http\Requests\CollectRequest;
use App\Models\Quorter;
use App\Models\Zone;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CityOptions extends Component
{
    public $choosenQuorter = '';
    public $n_av = 0;
    public $credentials = [];

    public function updated ($choosenQuorter,$value)
    {
        $this->n_av = Quorter :: where('name',$this->choosenQuorter)->first('n_av')->n_av;
    }
    public function createRecyclage (CollectRequest $request )
    {
        $credentials = $request->validated();
        $user = Auth::user();
        if ($user->is_admin) {
            $zone = Zone::where('name',Auth::user()->zone)->first();
            $credentials['user_id'] = Auth::user()->getAuthIdentifier();
            $zone->collects()->create($credentials);
            session('collectCreated','planifié avec succès');
            return redirect()->route('recyclage');
        }
    }
    public function render()
    {
        $zone = Zone::where('name',Auth::user()->zone)->first();
        return view('livewire.city-options',[
            'zone' => $zone
        ]);
    }
}
