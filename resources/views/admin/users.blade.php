@extends('layouts.header')
@section('title','utilisateurs')
@section('content')
<div class="w-full bg-gray-200 text-white">
    <!-- Sidebar -->
    <div class="flex h-screen relative">
        @include('admin.assets.side')
        <!-- Main content -->
        <div class="w-5/6 p-4 relative z-index-10 translate-x-[20%]">
            <!-- User profile card -->
            @include('admin.assets.header')
            <div class="flex justify-between px-4 w-full  gap-4">
                <!-- Start a Course section -->
                <div class="container mx-auto mt-4">
                    <h2 class="text-2xl font-bold text-green-950">Tableau des utilisateurs</h2>
                
                    <div id="table-data">
                      </div>
                
                    <div class="mt-4 flex justify-between">
                      <i id="prev-btn" class="bi bi-chevron-left disabled:opacity-50 cursor-pointer text-4xl text-green-950 cursor-pointer "></i>
                      <span id="current-page" class="text-green-950 font-semibold"></span>
                      <i id="next-btn" class="bi bi-chevron-right cursor-pointer text-4xl text-green-950 cursor-pointer "></i>
                    </div>
                  </div>
                
            </div>
            <!-- Advertisement banner -->
            <div class="bg-transparent p-4 rounded-lg mt-4">
  
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/Users.js')}}"></script>
@endsection