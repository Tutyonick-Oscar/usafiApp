@extends('layouts.header')
@section('title','Rendre l\'environnement propre | UsafiApp')
@section('content') 
{{-- @dd($collect)
@dd($posts->first()) --}}
   <section class="w-full bg-[#ffffff] rounded-br-[50px] rounded-bl-[50px] pt-20">
    @include('layouts.assets.highNav')
    <div class="w-full flex items-center justify-center overflow-scroll">
        {{-- displaying posts (the three firsts will be shown) --}}
        @forelse ($posts as $post)
        <div class="
            @if (!$posts->first())
                hidden
            @endif
            w-full flex flex-col gap-3 px-5 py-3 container">
            <p class="text-[#19243a] text-center">
                {{$post->content}}  
            </p>
            <div>
                <img src="/storage/{{$post->image}}" class="w-full h-48 object-contain" alt="">
            </div>
        </div>
        @empty
        <div class="w-full flex flex-col gap-3 px-5 py-3 container">
            <p class="text-[#19243a] text-center">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Optio molestiae amet illo culpa veritatis quo numquam    
            </p>
            <div>
                <img src="media/Waste management-amico (1).png" class="w-full h-48 object-contain" alt="">
            </div>
        </div>
        @endforelse
    </div>
    <div class="flex items-center justify-center gap-2 pb-3">
        <i class="bi bi-circle text-[#19243a] cursor-pointer"></i>
        <i class="bi bi-circle-fill text-[#19243a]"></i>
        <i class="bi bi-circle text-[#19243a] cursor-pointer"></i>
        
    </div>
   </section>
   <section class="w-full h-auto pb-10 pt-5 flex flex-col">
    <div id="container" class="px-5 py-3">
        <!-- la question de sondage de collecte -->

        <div id="question" class="flex flex-col gap-3">
          <p class="text-[#ffffff]">
            3 personnes de votre entourage ont demandé le service de collecte hors la date prévue. 
            Voulez-vous aussi demander ce service ?
        </p>
          <div class="flex flex-col gap-4">
              <div id="oui" class="flex gap-4">
                  <i id="rempli" class="bi bi-circle text-[#ffffff] cursor-pointer"></i>
                  <i id="vide" class="bi bi-circle-fill text-[#ffffff] hidden"></i>
                  <p class="text-[#ffffff]">Oui</p>
              </div>
              <div id="non" class="flex gap-4">
                  <i id="remplie" class="bi bi-circle text-[#ffffff] cursor-pointer"></i>
                  <i id="vides" class="bi bi-circle-fill text-[#ffffff] hidden"></i>
                  <p class="text-[#ffffff]">Non</p>
              </div>
          </div>
      </div>
      
        </div>

        <!-- Pop up d'un message de collecte avant la date prevue -->

        <div id="calendar" class="bg-[#19243a] p-3 bottom-0 translate-y-20  w-full h-screen z-20 flex-col justify-center backdrop:first-letter:blur-[.5rem]  absolute flex  hidden">
            <div class="relative w-full min-h-96 md:flex flex-col items-center justify-center">
                <div class="w-full flex justify-end">
                    <i class="bi bi-x-circle-fill text-xl text-[#ffffff] mb-16 absolute delete"></i>
                </div>
                <div class="pb-3 w-full justify-start pt-10">
                    <h1 class="font-semibold text-md text-[#ffffff]">
                        Vous êtes sur le point de proposer une collecte hors la date prévue <br>
                        une date qui vous est convennable et une justification courte nous seront utiles pour traiter votre demande
                    </h1>
                </div>
                <div>
                <div class="calendar w-full h-auto px-4 pb-4 bg-Text rounded-lg shadow-lg">
                    <header class="flex items-center justify-between">
                        <h3 class="font-semibold text-[#ffffff] text-md text-l pt-3"></h3>
                        <nav class="">
                            <button id="prev" class="w-8 h-8 relative top-1/2 border-none bg-transparent cursor-pointer before:w-1/2 before:h-1/2 before:absolute before:top-1/2 before:left-1/2 before:border-solid before:border-t-0 before:border-r-0 before:border-l-4 before:border-b-4  before:border-gray-400 hover:before:border-black before:rotate-45 "></button>
                            <button id="next" class="w-8 h-8 relative top-1/2 border-none bg-transparent cursor-pointer before:w-1/2 before:h-1/2 before:absolute before:top-1/2 before:left-1/2 before:border-solid before:border-t-4 before:border-r-4 before:border-l-0 before:border-b-0  before:border-gray-400 hover:before:border-black before:rotate-45 "></button>
                        </nav>
                    </header>
                    <section class="days">
                        <ul class="text-sm flex text-[#ffffff]">
                            <li>dim</li>
                            <li>lun</li>
                            <li>mar</li>
                            <li>mer</li>
                            <li>jeu</li>
                            <li>ven</li>
                            <li>sam</li>
                        </ul>
                        <ul class="dates text-sm  cursor-pointer text-[#ffffff]">
                            <li class="today"></li>
                            <li class="inactive"></li>
                        </ul>
                    </section>
               </div>
                
                </div>
                <form action="" class="py-5" method="POST">
                    @csrf
                    <div class="w-full relative">
                        <input type="hidden" name="date">
                        <div class="w-full flex justify-end">
                            <i class="bi bi-send-fill text-4xl text-[#19243a] mt-1 mr-3 absolute rotate-[45deg]"></i>
                        </div>
                        <input type="text" placeholder="justifiez la demande..." autocomplete="justify" name="justify" autofocus
                         value="{{old('justify')}}" class="w-full py-3 px-4 outline-none rounded-xl border-2 border-[#ffffff]">
                        @error('justify')
                            <small class=" text-sm text-red-600">
                                {{$message}}
                            </small>
                        @enderror
                        </div>
                </form>
            </div>
        </div>
        

        <!-- le calendrier de collecte -->

        <div id="calendrier" class=" relative w-full min-h-96 md:flex flex-col items-center justify-center px-5 hidden">
            <div class="pb-3 w-full justify-start">
                <h1 class="font-bold text-[#ffffff]">Kamenge / 11ème Avenue</h1>
            </div>
            <div>
              <h1 class="font-semibold text-[#ffffff] capitalize">collecte Août/2024 </h1>
          </div>
          <div class="calendar w-full h-auto px-4 pb-4 bg-transparent rounded-lg shadow-lg">
            <header class="flex items-center justify-between">
                <h3 class=" text-[#ffffff] text-md"></h3>
                <nav class="">
                    <button id="prev" class="w-8 h-8 relative top-1/2 border-none bg-transparent cursor-pointer before:w-1/2 before:h-1/2 before:absolute before:top-1/2 before:left-1/2 before:border-solid before:border-t-0 before:border-r-0 before:border-l-4 before:border-b-4  before:border-gray-400 hover:before:border-black before:rotate-45 "></button>
                    <button id="next" class="w-8 h-8 relative top-1/2 border-none bg-transparent cursor-pointer before:w-1/2 before:h-1/2 before:absolute before:top-1/2 before:left-1/2 before:border-solid before:border-t-4 before:border-r-4 before:border-l-0 before:border-b-0  before:border-gray-400 hover:before:border-black before:rotate-45 "></button>
                </nav>
            </header>
            <section class="days">
                <ul class="font-bold flex  text-[#ffffff] w-full">
                    <li>dim</li>
                    <li>lun</li>
                    <li>mar</li>
                    <li>mer</li>
                    <li>jeu</li>
                    <li>ven</li>
                    <li>sam</li>
                </ul>
                <ul class="dates cursor-pointer text-[#ffffff]">
                    <li class="today"></li>
                    <li class="inactive"></li>
                </ul>
            </section>
       </div>
          
        </div>
          
    </div>
    @include('layouts.assets.downNav')
   </section>
   <!-- SCRIPT -->
   {{-- <script src="{{asset('js/script.js')}}"></script> --}}
   <script src="{{asset('js/home.js')}}"></script>
   <script src="../path/to/flowbite/dist/datepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
@endsection