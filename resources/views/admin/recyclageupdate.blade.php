@extends('layouts.header')
@section('title','Editer recyclage/'.$collecte->quorter.'-'.$collecte->av)
@section('content')
<div class="w-full bg-gray-200 text-white" style="font-family: Roboto Mono, monospace;">
    <!-- Sidebar -->
    <div class="flex h-screen relative">
        @include('admin.assets.side')
        <!-- Main content -->
        <div id="main" class="w-5/6 p-4 relative z-index-10 translate-x-[20%]">
            <!-- User profile card -->
            @include('admin.assets.header')
            <div class="flex flex-col flex-col-reverse justify-between px-4 w-full  gap-4 ">
                <!-- Start a Course section -->
                {{-- <div class="w-full flex flex-col gap-1">
                    <div class="px-4">
                        <h1 class="font-bold text-xl text-gray-500">Articles récement publiés</h1>
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
                                        Numéro
                                      </th>
                                      <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Intitulé du Post
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
                </div> --}}
                    <div class="w-full flex text-green-950">
                      @session('success')
                      <span class="w-[16rem] h-auto absolute px-3 py-1 right-5 text-sm text-green-300 bg-green-600 rounded-md">
                        {{session('success')}}
                      </span>
                      @endsession
                        <div>
                          <div id="calendar" class="bg-transparent  rounded-lg w-1"></div>
                        </div>
                        <div class="w-full">
                          <h2 class="text-xl font-bold mb-4">
                            modifier la collecte de {{$collecte->quorter}}/{{$collecte->av}}è avennue
                            </h2>
                          <form action="{{route('collecte.updated',$collecte->id)}}" id="recycling-form" method="POST" class="w-[70%] bg-white rounded-lg shadow-md p-4">
                            @csrf
                            @method('PUT')
                            <livewire:cityOptions>
                            <div class="mb-4">
                              <label for="date" class="block font-bold mb-2">Date du recyclage :</label>
                              <input type="date" id="date" name="date" class="border rounded-lg py-2 px-3 w-full"
                              autocomplete="date" value="{{$collecte->date}}" required>
                              @error('date')
                                <small class=" text-red-600">
                                  {{$message}}
                                </small>
                              @enderror
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                Enregister
                            </button>
                          </form>                       
                        </div>
                      </div>
                    </div>
            </div>
            <!-- Advertisement banner -->
            <div class="bg-transparent p-4 rounded-lg mt-4">
  
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/Recyclage.js')}}"></script>
@endsection