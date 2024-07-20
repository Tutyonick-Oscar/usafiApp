@extends('layouts.header')
@section('title','authUser_name')
@section('content')
{{-- @include('layouts.assets.verification') --}}
<section class="w-full flex flex-col">
    <nav class="w-full flex flex-col bg-[#073529] pb-10 rounded-br-[50px] rounded-bl-[50px]">
        <div class="w-full flex justify-between px-5 py-3">
            <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
            <i class="bi bi-gear text-4xl text-[#ffffff]"></i>
        </div>
        <div class="w-full flex flex-col justify-center items-center gap-4">
            <div>
                <img src="media/microgels.jpeg" alt="" class="relative w-36 h-36 rounded-full border-2 border-green-950">
                <i class="bi bi-camera-fill text-red-700 text-4xl absolute left-[60%] top-[23%]"></i>
            </div>
            <div class="flex gap-5">
                <p id="name" class="font-bold text-xl text-[#ffffff]">Séverin Alimasi</p>
                <i id="editIcon" class="bi bi-pen-fill text-[#ffffff] material-icons"></i>
            </div>
        </div>
    </nav>
    <div class="flex flex-col gap-10">
        <form action="" class="w-full flex flex-col gap-4 px-5">
            <div class="flex flex-col gap-1">
                <label for="nom" class="text-[#19243a] capitalize">Nom</label>
                <div class="w-full relative flex flex-col">
                    <!-- <div class="absolute justify-end flex w-full px-4 py-2">
                    </div> -->
                    <input type="text" id="nom" placeholder="Enter votre nom..." class="relative pl-4 py-2 bg-transparent border-2 border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize">
                    <i class="bi bi-pen-fill text-[#ffffff] absolute top-3 left-[90%]"></i>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label for="prenom" class="text-[#19243a] capitalize">Prenom</label>
                <div class="w-full relative flex flex-col">
                    <!-- <div class="absolute justify-end flex w-full px-4 py-2">
                        <i class="bi bi-pen-fill text-[#ffffff]"></i>
                    </div> -->
                    <input type="text" id="prenom" placeholder="Enter votre Prenom..." class="relative pl-4 py-2 bg-transparent border-2 border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize">
                    <i class="bi bi-pen-fill text-[#ffffff] absolute top-3 left-[90%]"></i>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label for="prenom" class="text-[#19243a] capitalize">Adresse mail</label>
                <div class="w-full relative flex flex-col">
                    <!-- <div class="absolute justify-end flex w-full px-4 py-2">
                        <i class="bi bi-pen-fill text-[#ffffff]"></i>
                    </div> -->
                    <input type="email" id="prenom" placeholder="Enter votre adresse mail..." class="relative pl-4 py-2 bg-transparent border-2 border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize">
                    <i class="bi bi-pen-fill text-[#ffffff] absolute top-3 left-[90%]"></i>
                </div>
            </div>
            <select name="" id=""  class="pl-4 pr-2 py-2 border-2 bg-transparent border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                <option value="choix">Votre sexe</option>
                <option value="option1">Homme</option>
                <option value="option2">Femme</option>
                <option value="option2">Autres</option>
            </select>
            <select name="" id=""  class="pl-4 pr-2 py-2 border-2 bg-transparent border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                <option value="choix">Choisissez votre Quartier
                </option>
                <option value="option1">Bwiza</option>
                <option value="option2">Mutakura</option>
                <option value="option3">Carama</option>
                <option value="option4">Kigobe</option>
            </select>
            <select name="" id=""  class="pl-4 pr-2 py-2 bg-transparent border-2 border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                <option value="choix">Choisissez votre avenue</option>
                <option value="option1">Bwiza</option>
                <option value="option2">Mutakura</option>
                <option value="option3">Carama</option>
                <option value="option4">Kigobe</option>
            </select>
            <div class="flex flex-col gap-1">
                <label for="prenom" class="text-[#19243a] capitalize">Prenom</label>
                <div class="w-full relative flex flex-col">
                    <!-- <div class="absolute justify-end flex w-full px-4 py-2">
                        <i class="bi bi-pen-fill text-[#ffffff]"></i>
                    </div> -->
                    <input type="text" id="prenom" placeholder="Enter votre Prenom..." class="relative pl-4 py-2 bg-transparent border-2 border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize">
                    <i class="bi bi-pen-fill text-[#ffffff] absolute top-3 left-[90%]"></i>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label for="prenom" class="text-[#19243a] capitalize">Bio</label>
                <div class="w-full relative flex flex-col">
                    <!-- <div class="absolute justify-end flex w-full px-4 py-2">
                        <i class="bi bi-pen-fill text-[#ffffff]"></i>
                    </div> -->
                    <textarea name="" id="" cols="5" rows="2" placeholder="Entre votre biographie..."  class="relative pl-4 py-2 bg-transparent border-2 border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize"></textarea>
                    <!-- <input type="text" id="prenom" placeholder="Enter votre Prenom..." class="relative pl-4 py-2 bg-green-950 border-2 border-[#ffffff] outline-none text-[#ffffff] rounded-md first-letter:capitalize"> -->
                    <i class="bi bi-pen-fill text-[#ffffff] absolute top-3 left-[90%]"></i>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label for="password" class="text-[#19243a] capitalize">Mot de passe</label>
                <div class="w-full relative flex flex-col">
                    <!-- <div class="absolute justify-end flex w-full px-4 py-2">
                        <i class="bi bi-pen-fill text-[#ffffff]"></i>
                    </div> -->
                    <input type="text" id="password" placeholder="Enter votre mot de passe..." class="relative pl-4 py-2 bg-transparent border-2 border-[#42db80] outline-none text-[#ffffff] rounded-md first-letter:capitalize">
                    <i class="bi bi-pen-fill text-[#ffffff] absolute top-3 left-[90%]"></i>
                </div>
            </div>
    </form>
    <div class="w-full flex gap-5 items-center justify-center mb-20">
        <button class="px-5 py-3 border-2 border-[#42db80] text-[#ffffff] font-semibold text-2xl rounded-xl hover:bg-[#42db80] hover:text-[#ffffff] duration-300">Annuler</button>
        <button class="px-7 py-3 bg-[#42db80] text-[#ffffff] font-semibold text-2xl rounded-xl">Enregistrer</button>
    </div>
    </div>
</section>
@include('layouts.assets.downNav')
<script src="{{asset('js/profil.js')}}"></script>
@endsection