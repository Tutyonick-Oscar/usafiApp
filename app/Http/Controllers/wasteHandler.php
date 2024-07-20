<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectRequest;
use App\Http\Requests\eduPosts;
use App\Models\Zone;
use Auth;
use Illuminate\Http\Request;

class wasteHandler extends Controller
{
    public function recycler ( CollectRequest $request )
    {
        $credentials = $request->validated();
        $user = Auth::user();
        if ($user->is_admin) {
            $zone = Zone::where('name',Auth::user()->zone)->first();
            $credentials['user_id'] = Auth::user()->getAuthIdentifier();
            $zone->collects()->create($credentials);
            return redirect()->route('recyclage')->with('success','collecte planifiée avec succès');
        }
        return back()->withErrors([
            'quorter' => 'seul les admin peuvent effectuer cette requette !'
        ]);
    }
    public function posts ( eduPosts $request) 
    {
        $user = Auth::user();
        $credentials = $request->validated();
        
        if ($user->is_admin) {
            if ($request->validated('image')!== null && !$request->validated('image')->getError()){
                $credentials['image'] = $request->validated('image')->store('posts','public');
            }
            $user->posts()->create($credentials);
            return redirect()->route('eduPosts')->with('success','publié avec succès !');
        }

        return back()->withErrors([
            'content' => 'seul les admin peuvent effectuer cette requette !'
        ]);
    }
}
