@extends('layouts.header')
@section('title','Inscription | UsafiApp')
@section('content')
<section class="relative w-full flex justify-center items-center  bg-[#073529] ">
   <div class=" w-full lg:w-1/2 flex flex-col items-center justify-between gap-4 p-10">
        <a href="" class="absolute left-10 top-5 lg:top-10 h-8 w-8">
            <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
        </a>
        <div class="flex flex-col gap-4 mt-3">
                <div class="text-[#ffffff]">
                    <h1 class="font-bold text-2xl text-[#ffffff] pb-2">S'incrire</h1>
                    <p>
                    Les information rensignés ici doivent être exactes. Cela nous aide à trouver plus facilement votre emplacement, 
                    veuillez mettre à jour ces informations en cas de demmenagement 
                    </p>
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="flex items-center px-4 py-2 gap-2 bg-[#42db80]     rounded-md text-[#ffffff]">
                        <i class="bi bi-facebook text-2xl text-[#ffffff]"></i>
                        <p href="#">facebook</p>
                    </a>
                    <a href="#" class="flex gap-2 px-4 py-2 rounded-md border-2 border-[#42db80] text-[#42db80] hover:bg-[#42bd80] hover:text-[#ffffff] transition-300   text-blue-700bg-blue-700 ">
                        <i class="bi bi-google text-[#42db80] hover:text-[#ffffff]"></i>
                        <p class="text-[#42db80] hover:text-[#ffffff]">Google</p>
                    </a>
                
                </div>
        </div>
        <form action="" class=" w-full flex flex-col gap-4 " method="POST">
            @csrf
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-[#ffffff] capitalize">nom complet</label>
                    <input type="text" id="name" name="name" placeholder="Ecrivez votre nom..." class="pl-4 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none" value="{{old('name')}}" required autofocus autocomplete="name">
                    @error('name')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email" class="text-[#ffffff] capitalize">email</label>
                    <input type="email" value="{{old('email')}}" 
                    required autofocus autocomplete="email" name="email" id="email" 
                    placeholder="Ecrivez votre email..." 
                    class="pl-4 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                    @error('email')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                
                <div class="w-full flex flex-col gap-1">
                    <label for="commune" class="text-[#ffffff] capitalize">commune</label>
                    <select name="commune" value="{{old('commune')}}" required autofocus autocomplete="commune"  
                    class="pl-4 pr-2 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                        <option value="choix">Choisissez votre commune</option>
                        <option value="ntahangwa" class=" bg-[#42db80] text-white hover:bg-[#42db80] border-b border-b-[gray] py-2 ">Ntahangwa</option>
                        <option value="mukaza" class=" bg-[#42db80] text-white hover:bg-[#42db80] border-b border-b-[gray] py-2 ">Mukaza</option>
                        <option value="muha" class=" bg-[#42db80] text-white hover:bg-[#42db80] border-b border-b-[gray] py-2 ">Muha</option>
                      
                    </select>
                    @error('commune')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                    <!-- <input type="text" id="commune" placeholder="Ecrire votre commune" class="pl-4 py-2 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none "> -->
                </div>
                <div class="flex flex-col gap-1">
                    <label for="zone" class="text-[#ffffff] capitalize">Zone : </label>
                    <input type="text" name="zone" id="zone" placeholder="zone de résidence..."
                    value="{{old('zone')}}" required autofocus autocomplete="zone" 
                    class="pl-4 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none">
                    @error('zone')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <label for="quorter" class="text-[#ffffff] capitalize">Quartier</label>
                    <select name="quorter" id="quorter" value="{{old('quorter')}}" required autofocus autocomplete="quorter"  class="pl-4 pr-2 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                        <option value="choix">Choisissez votre quartier</option>
                        <option value="bwiza">Bwiza</option>
                        <option value="mutakura">Mutakura</option>
                        <option value="carama">Carama</option>
                        <option value="kigobe">Kigobe</option>
                    </select>
                    @error('quorter')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                    <!-- <input type="avenue" id="avenue" placeholder="Ecrivez votre avenue..." class="pl-4 py-2 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none "> -->
                </div>
                <div class="flex flex-col gap-1">
                    <label for="avenue" class="text-[#ffffff] capitalize">Avennue</label>
                    <select name="av" id="avenue" value="{{old('avenue')}}" required autofocus autocomplete="avenue"  class="pl-4 pr-2 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                        <option value="choix">Choisissez votre avenue</option>
                        <option value="bwiza">Bwiza</option>
                        <option value="mutakura">Mutakura</option>
                        <option value="carama">Carama</option>
                        <option value="kigobe">Kigobe</option>
                    </select>
                    @error('av')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                    <!-- <input type="avenue" id="avenue" placeholder="Ecrivez votre avenue..." class="pl-4 py-2 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none "> -->
                </div>
                <div class="flex justify-between w-full">
                    {{-- <div class=" flex flex-col gap-1 w-[45%]">
                        <label for="street" class="text-[#ffffff] capitalize">Route</label>
                        <input type="text" name="street" id="street" placeholder="rue" 
                        value="{{old('street')}}" required autofocus autocomplete="street"
                        class="w-full pl-4 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                        @error('street')
                            <small class=" text-red-600">
                                {{$message}}
                            </small>
                        @enderror 
                    </div> --}}
                    <div class=" flex flex-col gap-1 w-[45%]">
                        <label for="house" class="text-[#ffffff] capitalize">Maison</label>
                        <input type="text" name="house" id="house" placeholder="maison" 
                        value="{{old('house')}}" required autofocus autocomplete="house"
                        class="w-full pl-4 py-2 bg-[transparent] border border-[#42db80] text-[#ffffff] rounded-md first-letter:capitalize outline-none ">
                        @error('house')
                            <small class=" text-red-600">
                                {{$message}}
                            </small>
                        @enderror 
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="text-[#ffffff] capitalize">password</label>
                    <div class=" relative flex flex-col">
                        <div class="absolute justify-end flex px-4 py-2">
                            <i class="bi bi-eye-slash text-[#ffffff] hidden"></i>
                            <i class="bi bi-eye text-[#ffffff]"></i>
                        </div>
                        {{-- <input type="password" name="password" id="password" placeholder="Entrer votre mot de passe..." class="pl-4 py-2 bg-[transparent] border border-[#42db80] outline-none text-[#ffffff] rounded-md"> --}}
                    </div>
                    <input type="password" name="password" id="password" placeholder="Entrer votre mot de passe..."
                    value="{{old('password')}}" required autofocus autocomplete="password"
                    class="pl-4 py-2 bg-[transparent] border border-[#42db80] outline-none text-[#ffffff] rounded-md">
                    @error('password')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password_confirmation" class="text-[#ffffff] capitalize">confirm password</label>
                    <div class="w-full relative flex flex-col">
                        <div class="absolute justify-end flex w-full px-4 py-2">
                            <i class="bi bi-eye-slash text-[#ffffff] hidden"></i>
                            <i class="bi bi-eye text-[#ffffff]"></i>
                        </div>
                        <input type="password" name="password_confirmation" id="password_confirmation" 
                        value="{{old('password_confirmation')}}" required autofocus autocomplete="password_confirmation"
                        placeholder="Entrer votre mot de passe..." class="pl-4 py-2 bg-[transparent] border border-[#42db80] outline-none text-[#ffffff] rounded-md">
                    </div>
                    <!-- <input type="password" id="confirmPass" placeholder="Confirmer votre mot de passe..." class="pl-4 py-2 bg-green-950 border-2 border-[#ffffff] text-[#ffffff] rounded-md first-letter:capitalize outline-none "> -->
                    @error('password_confirmation')
                        <small class=" text-red-600">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <!-- check box -->
            <div class="w-full flex items-center gap-2 ">
                <input type="checkbox" name="" id="" class="bg-[#42db80]">
                <p class="text-[#ffffff]">sauvegarder le mot de passe</p>
                @error('save')
                    <small class="text-red-600">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <!-- button submit -->
            <div class="w-full flex items-center">
                <button type="submit" name="submit" class="w-full py-2 bg-[#42db80] text-[#ffffff] rounded-xl uppercase font-bold">
                    enregistrer
                </button>
            </div>
        </form>
        <div class="flex items-center justify-center gap-2">
            <p class="text-[#ffffff]">avez-vous déjà un compte?</p>
            <a href="{{route('login')}}" class="text-[#42db80] underline">Se connecter</a>
        </div>
   </div>
</section>
<script src="{{asset('js/signIn.js')}}"></script>
@endsection