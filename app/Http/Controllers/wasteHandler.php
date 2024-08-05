<?php

namespace App\Http\Controllers;

use App\Models\Collect;
use App\Models\Post;
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
    public function updateCollecte (CollectRequest $request,int $id)
    {

        $collecte = Collect::where('id',$id)->first();
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
            $collecte->update($credentials);
            /**
             * notify users
             */
            // foreach ($usersNotify as $user) {
            //     $user->notify(new collectPlaned($updated, $user->id));
            // }
            return redirect()->route('recyclage')->with('success','collecte modifiée avec succès');
        }
        return back()->withErrors([
            'quorter' => 'seul les admin peuvent effectuer cette requette !'
        ]);
    }
    public function deleteCollecte (string $action, int $id)
    {
        $user = Auth::user();
        $collecte = Collect::where('id',$id)->first();
    
        if ($user->is_admin && $collecte->user_id === $user->id && $action === 'delete') {
            
            $collecte->delete();
            return redirect()->route('recyclage')->with('success','la collecte a bien été supprimer!');
        }
        return back()->withErrors([
            'content' => 'vous ne disposez pas de droit pour supprimer cette collecte !'
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
    public function eduPostupdated (eduPosts $request,int $id)
    {
        $user = Auth::user();
        $post = Post::where('id',$id)->first();
        $credentials = $request->validated();
        
        if ($user->is_admin) {
            if ($request->validated('image')!== null && !$request->validated('image')->getError()){
                $credentials['image'] = $request->validated('image')->store('posts','public');
            }
            $post->update($credentials);
            return redirect()->route('eduPosts')->with('success','modification enregistrée !');
        }

        return back()->withErrors([
            'content' => 'seul les admin peuvent effectuer cette requette !'
        ]);
    }
    public function deletePost (string $action,int $id)
    {
        $user = Auth::user();
        $post = Post::where('id',$id)->first();
    
        if ($user->is_admin && $post->user_id === $user->id && $action === 'delete') {
            
            $post->delete();
            return redirect()->route('eduPosts')->with('success','le post a bien été supprimer!');
        }
        return back()->withErrors([
            'content' => 'vous ne disposez pas de droit pour supprimer ce post !'
        ]);
    }
}
