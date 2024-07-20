@extends('layouts.header')
@section('title','Gérer efficacement vos déchets, garder l\'environnement sain')
@section('content')
<section class="w-full h-screen flex flex-col items-center justify-between bg-[#073529] gap-10 p-10">
    <div class="w-full flex flex-col items-center justify-center">
        <div class="w-28 h-28 rounded-full flex items-center justify-center">
            <img src="./src/media/microgels.jpeg" alt="" class="w-24 h-24 rounded-full object-cover">
        </div>
        <div>
            <p class="text-[#ffffff] first-letter:capitalize font-bold">
                UsafiApp
            </p>
        </div>
    </div>
    <div class="w-full flex flex-col items-center justify-center gap-4">
        <div class="w-full flex items-center justify-center overflow-scroll">
            <div class="w-full flex flex-col gap-3 container  hidden" >
                <div class="w-full">
                    <img src="media/Waste management-pana.png" alt="" class="w-full h-40 rounded-lg shadow-md shadow-[#ffffff] object-cover bg-[#ffffff]">
                </div>
                <div class="text-center text-[#ffffff]">
                    <p>Faites une meilleur gestion de vos dechets grace a notre application de gestion de collecte de dechet</p>
                </div>
            </div>
            <div class="w-full flex flex-col gap-3 container " >
                <div class="w-full">
                    <img src="media/Two factor authentication-rafiki.png" alt="" class="w-full h-40 rounded-lg shadow-md shadow-[#ffffff] object-cover bg-[#ffffff]">
                </div>
                <div class="text-center text-[#ffffff]">
                    <p>Soyez a l'ecoute, ne manquez pas la collecte ou faites appel à nos service de collecte</p>
                </div>
            </div>
            <div class="w-full flex flex-col gap-3 container hidden" >
                <div class="w-full">
                    <img src="media/Waste management-amico (1).png" alt="" class="w-full h-40 rounded-lg shadow-md shadow-[#ffffff] object-cover bg-[#ffffff]">
                </div>
                <div class="text-center text-[#ffffff]">
                    <p>Vous etes tous appellez à sensibilisez votre entourage à ne pas jetez les dechets partout </p>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center gap-2">
            <div class="w-4 h-4 bg-[#ffffff] rounded-full cursor-pointer"></div>
            <div class="w-4 h-4 bg-[#42db80] rounded-full cursor-pointer"></div>
            <div class="w-4 h-4 bg-[#ffffff] rounded-full cursor-pointer"></div>
        </div>
    </div>

    <!--  buttons connexions -->

    <div class="w-full flex flex-col items-center justify-center gap-3 px-5">
        <div class="w-full">
            <button type="submit" class="w-full bg-[#42db80]  py-2 rounded-2xl text-[#ffffff] font-bold uppercase">
                <a class=" w-full" href="{{route('signin')}}">
                    creer un compte
                </a>
            </button>
        </div>
        <div class="w-full">
            <button type="submit" class="w-full py-2 border-2 border-[#42db80] text-[#42db80] rounded-2xl uppercase font-bold">
                <a class=" w-full" href="{{route('login')}}">
                    connexion
                </a>
            </button>
        </div>

    </div>
    
</section>
<script src="{{asset('js/connexion.js')}}"></script>
@endsection