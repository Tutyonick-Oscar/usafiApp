@extends('layouts.header')
@section('title','nouveau mot de passe')
@section('content')
<section class="w-full h-screen flex flex-col justify-between bg-[#073529] py-10 px-5">
    <div class="w-full items-start">
        <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
    </div>
    <div class="">
        <h1 class="font-bold text-xl text-[#ffffff]">
            Nouveau mot de passe
        </h1>
   </div>
    <div>
        <img src="{{asset('media/Authentication-rafiki (2).png')}}" alt="image-usafiApp" class="w-full h-40 rounded-lg object-contain">
    </div>
    <div class="text-center text-[#ffffff]">
        <p class=" text-justify">
            Votre demande a été traité avec succès <br>
            veuillez entrer le nouveau mot de passe <br>
            gardez-le sécret et ne l'oubliez surtout pas !
        </p>
    </div>
    <form action="{{route('password.store')}}" method="POST" class=" w-full flex flex-col gap-4 ">
        @csrf
        <div class="flex flex-col gap-1">

             <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            {{-- user email from request --}} 
            <input type="hidden" name="email" value="{{$request->email}}">
            
            {{-- user new password --}}
            <label for="password" class="text-[#ffffff] capitalize">password</label>
            <input type="password" id="password" name="password" value="{{old('password')}}"
                autofocus autocomplete="password"
                placeholder="Entrer votre mot de passe..." class="focus:border-2 pl-4 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none">
            @error('password')
                <small class=" text-red-600">
                    {{$message}}
                </small>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <label for="confirmPass" class="text-[#ffffff] capitalize">confirm password</label>
            <input type="password" id="confirmPass" name="password_confirmation"
                autofocus autocomplete="new-password" value="{{old('password_confirmation')}}"
                placeholder="Confirmer votre mot de passe..." class="pl-4 py-2 bg-[transparent] border border-[#42db80]  focus:border-2 text-[#ffffff] rounded-md outline-none">
            @error('password_confirmation')
                <small class=" text-red-600">
                    {{$message}}
                </small>
            @enderror
        </div>
        <div class="w-full flex items-center">
            <button type="submit" class="w-full py-2 bg-[#42db80] text-[#ffffff] rounded-xl uppercase font-bold">
                Continuer
            </button>
        </div>
    </form> 
</section>
@endsection