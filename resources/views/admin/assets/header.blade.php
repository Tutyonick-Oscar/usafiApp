<div class="w-full bg-[#ffffff] flex justify-between px-4 py-2 rounded-lg items-center mb-4">
    <div class="">
        <i id="list" class="bi bi-list text-3xl text-green-950"></i>
    </div>
    <form action="" class="flex items-center w-[50%] relative">
        <input id="searchInput" type="text" placeholder="Search..." class="w-full border-2 border-green-950 p-2 rounded-lg">
        <i onclick="search()" class="bi bi-search mt-0 ml-[89%] absolute text-green-950 px-2 py-1 text-xl rounded-lg ">
            
        </i>
    </form>
    <div class="w-[30%] flex gap-2 items-center justify-between">
        <div class="flex gap-3">
            <a href="{{route('notifications')}}">
                <i class="bi bi-bell-fill text-xl text-green-950"></i>
            </a>
        </div>
        <div class="flex gap-2 items-center">
            <div class=" w-8 h-8 rounded-full bg-green-950 text-white flex justify-center items-center">
                {{
                    $str::upper($str::substr(Auth::user()->name,0,1))
                }}
            </div>
            {{-- <img src="/media/Admin.Sev.jpg" class="w-8 h-8 rounded-full" alt=""> --}}
            <div class="flex flex-col ">
                <h1 class="text-green-950 font-semibold text-sm">{{Auth::user()->name}}</h1>
                <p class="text-gray-400 text-sm">Team</p>
            </div>
        </div>
        <button class="rounded-lg px-3 py-1 bg-green-950">Add funds</button>
    </div>
    
</div>