@extends('layouts.header')
@section('title','dashboard')
@section('content')
    <section class="w-full bg-gray-200 text-white" style="font-family: Roboto Mono, monospace;">
            <!-- Sidebar -->
    <div class=" w-full flex h-screen relative">
        @include('admin.assets.side')
        <!-- Main content -->
        <div id="main" class="w-[85%] p-4 relative z-index-10 translate-x-[20%]">
            <!-- User profile card -->
            @include('admin.assets.header')
            <div class="flex justify-between px-4 w-full  gap-4">
                <!-- Start a Course section -->
                <a href="{{route('users')}}" class="w-[23%] bg-[#ffffff] flex flex-col gap-3 items-center text-green-950 h-autto p-4 rounded-lg hover:bg-green-950 hover:text-[#ffffff] traansition-300 cursor-pointer">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-people-fill text-2xl"></i>
                        <h3 class="font-bold text-xl">Users</h3>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-gray-400">3,569</h1>
                    </div>
                    <!-- Course cards -->
                    <!-- Replace with your course cards -->
                </a>
                <a href="{{route('recyclage')}}" class="w-[23%] bg-[#ffffff] flex flex-col gap-3 items-center text-green-950 h-autto p-4 rounded-lg hover:bg-green-950 hover:text-[#ffffff] traansition-300 cursor-pointer">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-recycle text-2xl"></i>
                        <h3 class="font-bold text-xl">Recycler</h3>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-gray-400">100</h1>
                    </div>
                    <!-- Course cards -->
                    <!-- Replace with your course cards -->
                </a>
                
                <a href="{{route('eduPosts')}}" class="w-[23%] bg-[#ffffff] flex flex-col gap-3 items-center text-green-950 h-autto p-4 rounded-lg hover:bg-green-950 hover:text-[#ffffff] traansition-300 cursor-pointer">
                    <div class="flex gap-3 items-center">
                    <i class="bi bi-book-half text-2xl hover:text-green-950"></i>
                        <h3 class="font-bold text-xl">Sensibilisation</h3>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-gray-400">2,569</h1>
                    </div>
                    <!-- Course cards -->
                    <!-- Replace with your course cards -->
                </a>

                <a class="w-[23%] bg-[#ffffff] flex flex-col gap-3 items-center text-green-950 h-autto p-4 rounded-lg hover:bg-green-950 hover:text-[#ffffff] traansition-300 cursor-pointer">
                    <div class="flex gap-3 items-center">
                        <i class="bi bi-bell-fill text-xl text-green-950"></i>
                        <h3 class="font-bold text-xl">Notifications</h3>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl text-gray-400">3,569</h1>
                    </div>
                    <!-- Course cards -->
                    <!-- Replace with your course cards -->
                </a>
            </div>
            <!-- Advertisement banner -->
            <div class="bg-transparent p-4 rounded-lg mt-4">
              <div class="flex flex-col gap-1">
                <div class="flex justify-center items-center h-screen">
                    <div class="w-[70%] bg-white shadow-lg h-auto rounded-lg p-6">
                      <canvas id="myChart" ></canvas>
                    </div>
                  </div>
                <div class="px-4">
                    <h1 class="font-bold text-xl text-[#f5f5f5]">Les slide d'explication de gestion de collecte de déchet</h1>
                </div>
                <div class="container py-3 px-4">
                    <div class="flex flex-col">
                      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                <tr>
                                  <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                  </th>
                                  <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Libellé du message
                                  </th>
                                  <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                  </th>
                                  <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200" id="postsTable">
                                <!-- Les posts seront ajoutés ici -->
                              </tbody>
                            </table>
                            <div id="pagination" class="p-4">
                              <!-- La pagination sera ajoutée ici -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
  
            </div>
        </div>
    </div>
   
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{asset('js/dash.js')}}"></script>
@endsection