@extends('layouts.header')
@section('title','éducations sur l\'assenissement du milieu')
@section('content')

<div class="bg-gray-200 overflow-x-hidden text-white" style="font-family: Roboto Mono, monospace;">
      <!-- Sidebar -->
      <div class="flex h-screen relative">
        @include('admin.assets.side')
        <!-- Main content -->
        <div id="main" class="w-5/6 relative z-index-10 translate-x-[20%]">
            <!-- User profile card -->
            @include('admin.assets.header')
            <div class="bg-gray-200 min-h-32 flex flex-col px-4 w-full  gap-4">
                <!-- Start a Course section -->
                <div class="flex flex-col gap-1">
                    <div class="px-4">
                        <h1 class="font-bold text-xl text-green-950">Articles récement publiés </h1>
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
                                    @foreach ($posts as $item)
                                    <tr id="post-${post.id}">
                                      <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$item->id}}</td>
                                      <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                        @markdown
                                          {!!$item->content !!}
                                        @endmarkdown
                                      </td>
                                      <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500">
                                        <img src="/storage/{{$item->image}}" alt="Post Image" class="h-14 w-14 rounded-md">
                                      </td>
                                      <td class="px-4 py-2 flex gap-2 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-white py-1 px-3 rounded-md bg-blue-600 " onclick="editPost(${post.id})">Modifier</button>
                                        <button class="text-white py-1 px-3 rounded-md bg-red-600 " onclick="deletePost(${post.id})">Supprimer</button>
                                      </td>
                                    </tr>
                                    @endforeach
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

                  <!-- Recuperation de l'image -->

                <form id="postsForm" action="{{route('eduPosts.post')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  
               <div class="flex flex-col gap-4">
                <div class="bg-white rounded-lg shadow p-6">
                  <h2 class="text-2xl font-bold mb-4 text-green-950">Créer une Sensibilisation</h2>
                  <div id="content-editor" class="text-black"></div>
                  <input type="text" autofocus autocomplete="content" value="{{old('content')}}" name="content" id="content" class="hidden">
                  @error('content')
                    <small class=" text-red-600">
                      {{$message}}
                    </small>
                  @enderror
                </div>
                <div class="container">
                  <div class="max-w-sm">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                      <h2 class="text-gray-700 text-xl mb-4">Uploader une image</h2>
                      <div id="preview" class="mb-4">
                        <!-- Prévisualisation de l'image -->
                      </div>
                      <input type="file" name="image" id="imageUpload" class="hidden" accept="image/*" onchange="previewImage(event)">
                      <button type="button" onclick="document.getElementById('imageUpload').click()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Choisir une image
                      </button>
                      
                      @error('image')
                        <small class=" text-red-600">
                          {{$message}}
                        </small>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="w-full justify-end flex px-8 pb-10">
                  <button id="submit" type="submit" class="py-2 px-4 rounded-md text-[#ffffff] bg-green-500">Publier</button>
                </div>
                </form>
               </div>
            </div>
            <!-- Advertisement banner -->
            <div class="bg-transparent p-4 rounded-lg mt-4">
  
            </div>
        </div>
    </div>
</div>  
{{-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quilljs-markdown@latest/dist/quilljs-markdown.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="{{asset('js/eduposts.js')}}" type="module"></script>
@endsection