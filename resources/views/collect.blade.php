@extends('layouts.header')
@section('title','lancer la collecte des déchets')
@section('content')
<section class="w-full bg-[#073529] pb-4">
    @include('layouts.assets.highNav')
    <div class="">
        <div class="w-full flex flex-col gap-3 px-5 py-3 mt-20">
            <div>
                <img src="media/Waste management-amico.png" class="w-full h-48 object-contain" alt="">
            </div>
            <p class="text-[#ffffff] text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Optio molestiae amet illo culpa veritatis quo numquam 
                 
            </p>
            
        </div>
        <div class="w-full flex flex-col gap-3 px-5 py-3 hidden">
            <div>
                <img src="media/Waste management-amico.png" class="w-full h-48 object-contain" alt="">
            </div>
            <p class="text-[#ffffff] text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Optio molestiae amet illo culpa veritatis quo numquam 
                 
            </p>
            
        </div>
        <div class="w-full flex flex-col gap-3 px-5 py-3 hidden">
            <div>
                <img src="media/Waste management-amico.png" class="w-full h-48 object-contain" alt="">
            </div>
            <p class="text-[#ffffff] text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Optio molestiae amet illo culpa veritatis quo numquam 
                 
            </p>
            
        </div>
    </div>
    <div class="flex items-center justify-center gap-2 pb-3">
        <i class="bi bi-circle text-[#ffffff] cursor-pointer"></i>
        <i class="bi bi-circle-fill text-[#ffffff]"></i>
        <i class="bi bi-circle text-[#ffffff] cursor-pointer"></i>
        
    </div>
   </section>
   <section class="w-full h-screen relative z-20 bg-[#ffffff] rounded-tl-[50px] rounded-tr-[50px] py-8 flex flex-col">
        <div class="px-5 min-h-[96%] relative flex flex-col justify-between">
            <form action="" class="w-full flex flex-col gap-4">
                <input type="text" placeholder="Expliquez votre demande" class="pl-4 pr-2 py-4 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none">
                <select name="" id=""  class="pl-4 pr-2 py-4 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                    <option value="choix">Choisissez votre Quartier</option>
                    <option value="option1">Bwiza</option>
                    <option value="option2">Mutakura</option>
                    <option value="option3">Carama</option>
                    <option value="option4">Kigobe</option>
                </select>
                <select name="" id=""  class="pl-4 pr-2 py-4 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                    <option value="choix">Choisissez votre avenue</option>
                    <option value="option1">Bwiza</option>
                    <option value="option2">Mutakura</option>
                    <option value="option3">Carama</option>
                    <option value="option4">Kigobe</option>
                </select>
                <select name="" id=""  class="pl-4 pr-2 py-4 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                    <option value="choix">Choisissez votre N° d'appartement</option>
                    <option value="option1">1</option>
                    <option value="option2">9</option>
                    <option value="option3">6</option>
                    <option value="option4">10</option>
                </select>
                <select name="" id=""  class="pl-4 pr-2 py-4 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                    <option value="choix">Types de dechets</option>
                    <option value="option1">Plastique</option>
                    <option value="option2">Sachets</option>
                    <option value="option3">dechet alimentaire</option>
                    <option value="option4">autres</option>
                </select>
                <input type="date" placeholder="Suggerez un jour de collecte" class="pl-4 pr-2 py-4 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none">
            </form>
            <div class="w-full justify-center gap-10 flex mb-10">
                <button id="annuler" class="px-5 py-3 border-2 border-green-950 text-green-950 font-semibold text-2xl rounded-xl hover:bg-green-950 hover:text-[#ffffff] duration-300">Annuler</button>
                <button class="px-7 py-3 bg-green-950 text-[#ffffff] font-semibold text-2xl rounded-xl">Evoyer</button>
            </div>
        </div>
        @include('layouts.assets.downNav')
   </section>
   
@endsection