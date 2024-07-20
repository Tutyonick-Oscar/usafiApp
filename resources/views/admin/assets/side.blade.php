<nav id="nav" class="w-[16%] h-screen flex flex-col gap-10 p-4 fixed bg-green-950">
    <!-- Sidebar icons -->
    <!-- Replace with your icons -->
    <div class="flex gap-3 items-center">
        <img id="icon" src="/media/microgels.jpeg" width="40" height="40" class="w-10 h-10 rounded-full" alt="">
        <h1 id="hidde" class="text-2xl font-bold text-[#ffffff]">UsafiApp</h1>
    </div>
    <div class="flex flex-col gap-3">
        <div class="flex text-center hover:bg-[#ffffff] hover:text-green-950 items-center gap-3 rounded-lg px-3 py-1 duration-300">
            <i id="icon" class="bi bi-list-ul text-2xl hover:text-green-950"></i>
            <a id="hidde" href="{{route('adminpanel')}}" class="">Dashboard</a>
        </div>
        <div class="flex text-center hover:bg-[#ffffff] hover:text-green-950 items-center gap-3 rounded-lg px-3 py-1 duration-300">
          <i id="icon" class="bi bi-recycle text-2xl"></i>
            <a id="hidde" href="{{route('recyclage')}}" class="">Recycler</a>
        </div>
        <div class="flex text-center hover:bg-[#ffffff] hover:text-green-950 items-center gap-3 rounded-lg px-3 py-1 duration-300">
            <i id="icon" class="bi bi-book-half text-2xl hover:text-green-950"></i>
            <a id="hidde" href="{{route('eduPosts')}}" class="">Sensibilisation</a>
        </div>
        <div class="flex text-center hover:bg-[#ffffff] hover:text-green-950 items-center gap-3 rounded-lg px-3 py-1 duration-300">
          <i id="icon" class="bi bi-people-fill text-[#ffffff] hover:text-green-950 text-2xl"></i>
            <a id="hidde" href="{{route('notifications')}}" class="">Notification</a>
        </div>
        <!-- <div class="flex text-center hover:bg-[#ffffff] hover:text-green-950 items-center gap-3 rounded-lg px-3 py-1 duration-300">
            <i class="bi bi-flower1 text-2xl hover:text-green-950"></i>
            <a href="#" class="">Blog</a>
        </div> -->
        <div class="flex text-center hover:bg-[#ffffff] hover:text-green-950 items-center gap-3 rounded-lg px-3 py-1 duration-300">
            <i id="icon" class="bi bi-gear text-2xl hover:text-green-950"></i>
            <a id="hidde" href="{{route('setting')}}" class="">Settings</a>
        </div>
    </div>
</nav>