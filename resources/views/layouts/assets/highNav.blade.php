<nav class="w-full flex items-center justify-between px-5 py-3 bg-[#ffffff] shadow-lg fixed top-0 left-0 right-0 ">
    <div>
        <!-- <i class="bi bi-search"></i> -->
        <input type="search" placeholder="Recherchez..." class="w-full px-3 py-2 outline-none rounded-xl border-2 border-[#19243a] text-[#19243a]">
    </div>
    <div class=" relative">
        @auth
        @if (auth()->user()->unreadNotifications->count()!=0)
        <p class=" absolute text-sm w-4 h-4 top-0 right-0 text-white flex items-center justify-center rounded-full bg-red-700">
            <a href="#" id="notificationsCount">
                {{auth()->user()->unreadNotifications->count()}}
            </a>
        </p>
        @endif
        @endauth
        <i class="bi bi-bell-fill text-3xl text-[#073529]"></i>
    </div>
    <div>
        <select class="w-16 bg-[#073529] rounded-md p-2 text-[#ffffff]">
            <option value="choix une">Fr</option>
            <option value="choix une">Eng</option>
            <option value="choix une">Krd</option>
        </select>
    </div>
</nav>