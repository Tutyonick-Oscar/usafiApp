<?php

namespace App\Http\Controllers;

use App\Notifications\collectPlaned;
use Auth;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use App\Http\Requests\eduPosts;
use App\Http\Requests\CollectRequest;

class wasteHandler extends Controller
{
    public function recycler ( CollectRequest $request )
    {
        $credentials = $request->validated();

        /**
         * @var 
         * users that will be notified
         */
        $usersNotify = User::where([
            ['quorter',$credentials['quorter']],
            ['av',$credentials['av']]
        ])->get();

        $user = Auth::user();
        if ($user->is_admin) {
            $zone = Zone::where('name',Auth::user()->zone)->first();
            $credentials['user_id'] = Auth::user()->getAuthIdentifier();
            $collect = $zone->collects()->create($credentials);
            /**
             * notify users
             */
            foreach ($usersNotify as $user) {
                $user->notify(new collectPlaned($collect, $user->id));
            }

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
