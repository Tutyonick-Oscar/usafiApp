@extends('layouts.header')
@section('title','mot de passe oublié ?')
@section('content')
<section class="w-full h-screen  bg-[#073529] flex lg:justify-center lg:items-center">
    <div class="flex flex-col w-full justify-between  lg:w-1/2 h-full gap-5 px-5 py-10">
        <div class="w-full items-start">
            <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
        </div>
        <div class="flex flex-col gap-4 text-[#ffffff]">
            <h1 class="font-bold text-2xl first-letter:capitalize">
                mot de passe oublié ?
            </h1>
            <p>
               nous enverons un lien de verification à votre adresse mail 
               veuillez consulter votre boite mail pour soumetre votre demande de reinitialisation  
            </p>
        </div>
        <form action="{{route('password.email')}}" class=" w-full flex flex-col gap-10" method="POST">
            @csrf
            <div class="w-full flex flex-col gap-1">
                <label for="email" class="text-[#ffffff] capitalize">Email</label>
                <input type="email" name="email" id="email" 
                required autofocus autocomplete="email"
                placeholder="Entrer l'adresse mail..." class="pl-4 py-2 bg-[transparent] border border-[#42db80] rounded-md first-letter:capitalize outline-none text-[#ffffff]">
                @error('email')
                    <small class=" text-red-600">
                        {{$message}}
                    </small>
                @enderror
            </div>
        
            <div class="w-full">
                <button type="submit" class="w-full py-2 bg-[#42db80] text-[#ffffff] rounded-2xl uppercase font-bold">
                    envoyer
                </button>
            </div>
        </form>
        <div class="text-center">
            <a  href="{{route('password.request')}}" class="text-center text-[#42db80] border-b-2 border-[#42db80]">
                vous n'avez pas reçu le code ?
            </a>
        </div> 
    </div>
</section>
@endsection