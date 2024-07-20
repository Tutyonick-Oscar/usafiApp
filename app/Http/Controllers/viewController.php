<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Zone;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class viewController extends Controller
{
    public function index ()
    {
        return view('index');
    }
     
    public function collect ()
    {
        return view('collect');
    }
    public function connection ()
    {
        return view('connection');
    }
    public function education ()
    {
        return view('education');
    }
    public function setting ()
    {
        return view('setting');
    }
    public function membership ()
    {
        return view('membership');
    }
    public function profil ()
    {
        return view('profil');
    }

    //Dashboard
    public function dashboard ()
    {
        return view('admin.dashboard',[
            'str' => Str::class
        ]);
    }
    public function eduPosts ()
    {
        return view('admin.eduPosts',[
            'str' => Str::class,
            'posts'=> Post::paginate(5)
        ]);
    }
    public function notifications ()
    {
        return view('admin.notifications',[
            'str' => Str::class
        ]);
    }
    public function recyclage ()
    {
        $zone = Zone::where('name',Auth::user()->zone)->first();
        return view('admin.recyclage',[
            'str' => Str::class,
            'collectes' => $zone->collects()->get(),
            'carbon' =>Carbon::class
        ]);
    }
    public function users ()
    {
        return view('admin.users',[
            'str' => Str::class
        ]);
    }
}
