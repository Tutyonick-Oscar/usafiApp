@extends('layouts.header')
@section('title','paramètres')
@section('content')
<section class="w-full flex flex-col gap-4">
    <div class="px-5 rounded-br-[50px] rounded-bl-[50px] bg-[#073529] pb-10">
        <a href="./home.html" class="w-full flex justify-start py-3">
            <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
        </a>
        <div class="w-full flex flex-col justify-center items-center gap-4">
            <img src="media/microgels.jpeg" alt="" width="40" height="50" class="w-20 h-20 rounded-full border-2 border-green-950">
            <div class="flex gap-5">
                <p class="font-bold text-xl text-[#ffffff]">Séverin Alimasi</p>
                {{-- <i class="bi bi-pen-fill text-[#ffffff]"></i> --}}
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col gap-5 pb-20 px-5">
        <a href="./personal_profil.html" class="w-full flex gap-5 bg-green-950 rounded-xl items-center py-4 px-5">
            <i class="bi bi-person-circle text-[#ffffff] text-3xl"></i>
            <p class="font-semibold text-xl text-[#ffffff]">Profil</p>
        </a>
        <a href="./Profil.html" class="w-full flex gap-5 bg-green-950 rounded-xl items-center py-4 px-5">
            <i class="bi bi-pencil-square text-[#ffffff] text-3xl"></i>
            <p class="font-semibold text-xl text-[#ffffff]">Edit Profil</p>
        </a>
        <a href="./education.html" class="w-full flex gap-5 bg-green-950 rounded-xl items-center py-4 px-5">
            <i class="bi bi-backpack2 text-[#ffffff] text-3xl"></i>
            <p class="font-semibold text-xl text-[#ffffff]">Sensibilisation et Education</p>
        </a>
        <a href="./localisation.html" class="w-full flex gap-5 bg-green-950 rounded-xl items-center py-4 px-5">
            <i class="bi bi-geo-alt text-[#ffffff] text-3xl"></i>
            <p class="font-semibold text-xl text-[#ffffff]">Localisation</p>
        </a>
        <a href="" class="w-full flex gap-5 bg-green-950 rounded-xl items-center py-4 px-5">
            <i class="bi bi-info-circle-fill text-[#ffffff] text-3xl"></i>
            <p class="font-semibold text-xl text-[#ffffff]">Help center</p>
        </a>
        <a href="./login.html" class="w-full flex gap-5 bg-green-950 rounded-xl items-center py-4 px-5">
            <i class="bi bi-box-arrow-left text-[#ffffff] text-3xl"></i>
            <p class="font-semibold text-xl text-[#ffffff]">Lougout</p>
        </a>
    </div>
</section>
@include('layouts.assets.downNav')
<script src="{{asset('js/home.js')}}"></script>
@endsection