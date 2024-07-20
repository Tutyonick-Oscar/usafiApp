@extends('layouts.header')
@section('title','authUser_name/premium')
@section('content')
<nav class="w-full flex flex-col bg-[#ffffff] pb-10 rounded-br-[50px] rounded-bl-[50px]">
    <div class="w-full flex justify-between px-5 py-3">
        <i class="bi bi-arrow-left-circle-fill text-[#073529] text-2xl"></i>
        <i class="bi bi-gear text-4xl text-[#ffffff]"></i>
    </div>
    <div class="w-full flex flex-col justify-center items-center gap-4">
        <div>
            <img src="media/microgels.jpeg" alt="" width="144" height="144" class="relative w-36 h-36 rounded-full border-2 border-green-950">
            <i class="bi bi-camera-fill text-[#073529] text-4xl absolute left-[60%] top-[23%]"></i>
        </div>
        <div class="flex flex-col gap-3 items-center">
            <div class="flex gap-5">
                <p id="name" class="font-bold text-xl text-[#073529]">Séverin Alimasi</p>
                <i id="editIcon" class="bi bi-pen-fill text-[#073529] material-icons"></i>
            </div>
            <div id="open-modal" class="flex gap-2 items-center">
                <p class="text-[#073529]">Membre Premium</p>
                <i class="bi bi-award text-[#073529] text-4xl"></i>
            </div>
            <div id="myModal" class="modal fixed inset-0 z-50 overflow-auto bg-green-950 bg-opacity-50 hidden">
                <div class="modal-content bg-white rounded-lg shadow-xl w-11/12 md:w-1/2 mx-auto my-20 p-6">
                    <h2 class="text-xl font-bold mb-4 text-[#073529]">Enregistrement en tant que profil premium</h2>
                    <form id="premium-form">
                        <div class="mb-4">
                            <label class="block text-[#073529] font-bold mb-2" for="profile-type">Type de profil :</label>
                            <select id="profile-type" class="shadow appearance-none border border-[#42db80] rounded w-full py-2 px-3 text-[#073529]" required>
                                <option value="">Sélectionnez un type de profil</option>
                                <option value="personne">Personne</option>
                                <option value="hotel">Hôtel</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="entreprise">Entreprise</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-[#073529] font-bold mb-2" for="name">Nom :</label>
                            <input class="shadow appearance-none border border-[#42db80] rounded w-full py-2 px-3 text-[#073529]" id="name" type="text" placeholder="Entrez votre nom" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-[#073529] font-bold mb-2" for="payment-method">Mode de paiement :</label>
                            <select id="payment-method" class="shadow appearance-none border rounded border-[#42db80] w-full py-2 px-3 text-[#073529]" required>
                                <option value="">Sélectionnez un mode de paiement</option>
                                <option value="carte">Lumicash</option>
                                <option value="carte">Onamob</option>
                                <option value="carte">Ecocash</option>
                                
                            </select>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-[#42db80] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">
                                Valider
                            </button>
                            <button type="button" class="bg-transparent border border-[#42db80] hover:bg-[#42db80] text-[#073529] font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="close-modal">
                                Annuler
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="w-full p-6">
    <div class="w-full flex flex-col gap-4">
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Nom</label>
            <p class="text-[#ffffff] text-xl pb-2 border-b border-b-[#42db80]">Séverin</p>
        </div>
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Prenom</label>
            <p class="text-[#ffffff] text-xl pb-2 border-b border-b-[#42db80]">Pungu</p>
        </div>
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Adresse</label>
            <p class="text-[#ffffff] text-xl pb-2 border-b border-b-[#42db80]">Bujumbura</p>
        </div>
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Sexe</label>
            <p class="text-[#ffffff] text-xl pb-2 border-b border-b-[#42db80]">Masculin</p>
        </div>
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Quartier</label>
            <p class="text-[#ffffff] text-xl pb-2 border-b border-b-[#42db80]">Cibitoke</p>
        </div>
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Avenue</label>
            <p class="text-[#ffffff] text-xl pb-2 border-b border-b-[#42db80]">12ème Av.</p>
        </div>
        <div class="flex flex-col ">
            <label for="" class="text-[#ffffff] opacity-30">Bio</label>
            <p class="text-[#ffffff] pb-2 border-b border-b-[#42db80] text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quos deleniti vel? Atque eos animi omnis, necessitatibus tempora similique culpa distinctio! Cum vero id vel nostrum, excepturi inventore? Sunt, aspernatur.</p>
        </div>
    </div>
</section>
<script src="{{asset('js/personal_profil.js')}}"></script>
@endsection