@extends('layouts.header')
@section('title','notifications')
@section('content')
<div class=" w-full bg-gray-200 text-white">
     <!-- Sidebar -->
     <div class="flex h-screen relative" style="font-family: Roboto Mono, monospace;">
       @include('admin.assets.side')
        <!-- Main content -->
        <div id="main" class="w-5/6 p-4 relative z-index-10 translate-x-[20%]">
            <!-- User profile card -->
            @include('admin.assets.header')
            
            <div class="flex justify-between px-4 w-full  gap-4">
                <!-- Start a Course section -->
                <div class="container mx-auto py-10">
                    <h1 class="text-2xl font-bold mb-6 text-green-950">Notifications</h1>
                    <div id="notification-container" class="space-y-4">
                      <div class="bg-white rounded-lg shadow px-4 py-2 cursor-pointer notification-item h-20 overflow-hidden">
                        <div class="flex items-center">
                          <img src="/media/Admin.Sev.jpg" alt="John Doe" class="w-11 h-11 rounded-full mr-2">
                          <h3 class="font-bold text-gray-800">Séverin Alimasi</h3>
                        </div>
                        <p class="text-gray-600 notification-content mr-2">Vous avez un nouveau message. Voici le contenu du message : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      </div>
                      <div class="bg-white rounded-lg shadow px-4 py-2 cursor-pointer notification-item h-20 overflow-hidden">
                        <div class="flex items-center">
                          <img src="/media/Admin.Sev.jpg" alt="John Doe" class="w-11 h-11 rounded-full mr-2">
                          <h3 class="font-bold text-gray-800">Jacques Prince</h3>
                        </div>
                        <p class="text-gray-600 notification-content mr-2">Vous avez un nouveau message. Voici le contenu du message : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      </div>
                      <div class="bg-white rounded-lg shadow px-4 py-2 cursor-pointer notification-item h-20 overflow-hidden">
                        <div class="flex items-center">
                          <img src="/media/Admin.Sev.jpg" alt="John Doe" class="w-11 h-11 rounded-full mr-2">
                          <h3 class="font-bold text-gray-800">Homère Baraka</h3>
                        </div>
                        <p class="text-gray-600 notification-content mr-2">Vous avez un nouveau message. Voici le contenu du message : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      </div>
                      <div class="bg-white rounded-lg shadow px-4 py-2 cursor-pointer notification-item h-20 overflow-hidden">
                        <div class="flex items-center">
                          <img src="/media/Admin.Sev.jpg" alt="John Doe" class="w-11 h-11 rounded-full mr-2">
                          <h3 class="font-bold text-gray-800">Oscar Tulia</h3>
                        </div>
                        <p class="text-gray-600 notification-content mr-2">Vous avez un nouveau message. Voici le contenu du message : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                      </div>
                    </div>
                  </div>
            </div> 
        </div>
    </div>
</div>
<script src="{{asset('js/Notification.js')}}"></script>
@endsection