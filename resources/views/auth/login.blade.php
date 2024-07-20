@extends('layouts.header')
@section('title','Connexion | UsafiApp')
@section('content')
<section class="relative w-full flex justify-center items-center  bg-[#073529]">
    <div class="  w-full lg:w-1/2 flex flex-col items-center justify-between gap-4 p-10">
        
    <!-- tittle -->
    <a href="./connexion.html" class="absolute left-10 top-5 lg:top-10 h-8 w-8">
        <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
    </a>

    <div class="w-full flex flex-col items-start gap-2 text-[#ffffff] mt-10">
        <h1 class="font-bold text-2xl text-[#ffffff] first-letter:capitalize">
            login in
        </h1>
        <p class="text-[#ffffff] opacity-30">
            lorem ipsum dolor sit amet consectetur. accru eu neaue molestie vivamus.
        </p>
    </div>

    <!-- formulaire  -->

    <form action="" method="POST" class="flex flex-col gap-4 w-full">
        @csrf
        <div class="flex flex-col gap-1">
            <label for="email" class="text-[#ffffff] capitalize">email</label>
            <input type="email" name="email" id="email" required autofocus autocomplete="email" 
            placeholder="Enter votre email..." class="pl-4 py-2 bg-transparent border border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize">
            @error('email')
                <small class="text-red-600">
                    {{$message}}
                </small>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="pswd" class="text-[#ffffff] capitalize">password</label>
            <div class="w-full relative flex flex-col">
                <div class="absolute justify-end flex w-full px-4 py-2">
                    <i class="bi bi-eye-slash text-[#ffffff] hidden"></i>
                    <i class="bi bi-eye text-[#ffffff]"></i>
                </div>
                <input type="password" name="password" id="pswd" 
                required autofocus autocomplete="password" 
                placeholder="Entrer votre mot de passe..." class="pl-4 py-2 bg-transparent border border-[#42db80] outline-none text-[#ffffff] rounded-md">
            </div>
            @error('password')
                <small class="text-red-600">
                    {{$message}}
                </small>
            @enderror
        </div>
        <div class="text-end">
            <a href="{{route('password.request')}}" class="text-blue-600 border-b-2 border-blue-600 first-letter:capitalize">mot de passe oublié ?</a>
        </div>
        <div class="w-full">
            <button type="submit" name="submit"  class="w-full py-2 bg-[#42db80] text-[#ffffff] rounded-md uppercase font-bold">
                connexion
            </button>
        </div>
    </form>
    <!-- connexion -->
    <div class="w-full flex flex-col gap-2">
        <div class=" flex items-center justify-center gap-2 mt-5">
            <div class="w-[30%] border-b-2 border-Text">
            </div>
            <div>
                <p class=" text-[#ffffff]">
                    Or with
                </p>
            </div>
            <div class="w-[30%] border-b-2 border-Text">
            </div>
        </div>
        <div class="flex items-center justify-center gap-5 mt-5">
            <a href="#" class="flex items-center px-4 py-2 gap-2 bg-[#42db80]     rounded-md text-[#ffffff]">
                <i class="bi bi-facebook text-2xl text-[#ffffff]"></i>
                <p href="#">facebook</p>
            </a>
            <div class="flex gap-2 px-4 py-2 rounded-md border-2 border-[#42db80] text-[#42db80]  g-signin2 text-blue-700bg-blue-700 " data-onsuccess="onSignIn">
                <i class="bi bi-google text-[#ffffff]"></i>
                <p class="text-[#ffffff]">Google</p>
            </div>
        </div>
    </div>
                <!-- <i class="bi bi-google text-[#42db80]"></i>

                {{-- <p class="text-[#42db80]">Google</p> --> --}}
            </div>
           
        </div>
    </div>

    <-- inscription -->
    <div class="flex">
        <p class="flex flex-col items-center">
            <span class="text-[#ffffff]">
                vous n'avez pas de compte ?
            </span>
            <span >
               <a href="{{route('signin')}}" class="text-blue-700bg-blue-700   border-b-2 border-[#42db80] text-[#42db80]     font-bold"> s'inscrire</a>
            </span>
        </p>
    </div>
    </div>
</section>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="{{asset('js/login.js')}}"></script>
@endsection