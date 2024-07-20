@extends('layouts.header')
@section('title','rendre l\'environnement propre, meilleure gestion des déchets | Usafi App/Burundi')
@section('content')
@include('layouts.assets.highNav')
<div class="w-full flex flex-col items-center justify-center gap-4 mt-10 hidden bg-[#ffffff] rounded-br-[50px] rounded-bl-[50px] px-5 py-10">
    <div class="w-full flex items-center justify-center overflow-scroll">
        <div class="w-full flex flex-col gap-3 container " style="display:none;">
            <div class="w-full">
                <img src="media/Waste management-pana.png" alt="" class="w-full h-40 rounded-lg shadow-md shadow-[#ffffff] object-cover bg-[#ffffff]">
            </div>
            <div class="text-center text-[#073529]">
                <p>Faites une meilleur gestion de vos dechets grace a notre application de gestion de collecte de dechet</p>
            </div>
        </div>
        <div class="w-full flex flex-col gap-3 container " style="display:none;">
            <div class="w-full">
                <img src="media/Two factor authentication-rafiki.png" alt="" class="w-full h-40 rounded-lg shadow-md shadow-[#ffffff] object-cover bg-[#ffffff]">
            </div>
            <div class="text-center text-[#073529]">
                <p>Soyez a l'ecoute, ne manquez pas le collecte ou soit faite un appel à nos service de collecte</p>
            </div>
        </div>
        <div class="w-full flex flex-col gap-3 container " style="display:none;">
            <div class="w-full">
                <img src="media/Waste management-amico (1).png" alt="" class="w-full h-40 rounded-lg shadow-md shadow-[#ffffff] object-cover bg-[#ffffff]">
            </div>
            <div class="text-center text-[#073529]">
                <p>Vous etes tous appellez à sensibilisez votre entourage à ne pas jetez les dechets partout </p>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center gap-2">
        <div class="w-4 h-4 bg-[#073529] rounded-full cursor-pointer"></div>
        <div class="w-4 h-4 bg-[#42db80] rounded-full cursor-pointer"></div>
        <div class="w-4 h-4 bg-[#073529] rounded-full cursor-pointer"></div>
    </div>
</div>

<section class="px-5 py-10 w-full flex flex-col gap-5 mt-10">
    <div class="content-container flex flex-col">
        <div class="image-container w-full">
          <img src="media/Authentication-rafiki.png" alt="Description de l'image" class="w-full h-[50%]">
        </div>
        <div id="text-container" class="pb-8 text-container relative max-h-[100px] overflow-hidden duration-200 expanded">
          <p class="flex flex-col gap-1">
            <h1 class="font-serif text-[#ffffff] text-xl font-bold">Gestion de dechet</h1>
            <div class="w-full flex flex-col gap-2">
                <p class="text-[#ffffff] opacity-50 ">
                    Beaucoup de texte ici... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta eum similique ab sed, praesentium in, deleniti quod magnam provident ipsa error voluptatem! Impedit recusandae commodi culpa laboriosam? Ea, aut corporis.
                    Pariatur nihil vero perferendis sapiente quam veritatis, magni autem! Quis, mollitia corporis in voluptatem eos, quisquam nemo alias, distinctio reiciendis tenetur earum incidunt rem odio cupiditate animi perferendis consectetur beatae.
                    Veniam sunt, beatae magni delectus voluptates similique soluta iusto a quo quae corrupti. In, sed quaerat. Hic suscipit autem saepe repellendus nostrum labore amet. Quas quisquam deleniti amet doloremque ipsam.
                    Rerum quibusdam, quam reprehenderit repellat officia totam doloribus odit fugiat aut illum exercitationem eos, cupiditate illo ipsa ab quidem harum aliquid tempora eius sequi ullam quis. Rem ad illum quo.
                    Quae, corporis non provident explicabo, eligendi eos dolores nam dolorem voluptatibus mollitia quo veniam? Nihil numquam sint, quasi nulla, corrupti possimus esse, quos porro veritatis vel quibusdam nostrum ab!
                </p>
                <div class="w-full flex justify-between items-center">
                    <div>
                        <!-- Icône J'aime -->
                        <i class="bi bi-hand-thumbs-up text-4xl text-green-950 like-icon cursor-pointer likeIcon"></i>
                        <!-- Icône J'aime remplie (initiallement cachée) -->
                        <i class="bi bi-hand-thumbs-up-fill text-4xl text-green-950 like-icon hidden cursor-pointer likeIconFilled"></i>
                    </div>
                      <div>
                        <!-- Icône Je n'aime pas -->
                        <i class="bi bi-hand-thumbs-down text-4xl text-green-950 liked cursor-pointer dislikeIcon"></i>
                        <!-- Icône Je n'aime pas remplie (initiallement cachée) -->
                        <i class="bi bi-hand-thumbs-down-fill liked text-4xl text-green-950 hidden cursor-pointer dislikeIconFilled"></i>
                      </div>
                    <i class="bi bi-share text-4xl text-green-950" id="shareBtn"></i>

                     <!-- Popup de partage -->
<div id="sharePopup" class="hidden fixed z-10 left-0 top-0 px-5 w-full h-full overflow-auto bg-black bg-opacity-50">
    <div class="bg-white p-5 rounded-lg shadow-lg m-5 max-w-sm mx-auto mt-24">
        <div class="flex justify-between items-center mb-4">
            <h4 class="text-lg font-bold">Partager sur :</h4>
            <i class="bi bi-x-circle text-4xl text-green-950" id="closeBtn"></i>
            <!-- <button id="closeBtn" class="text-black">×</button> -->
        </div>
        <div class="flex justify-around">
            <!-- Icônes des réseaux sociaux -->
            <a href="#" class="text-blue-600"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-blue-400"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-pink-600"><i class="bi bi-instagram"></i></a>
            <!-- Ajoutez d'autres icônes ici -->
        </div>
    </div>
</div>
                    
                </div>
             </div>
          </p>
          
        </div>
        <button id="read-more-btn" class="read-more-btn cursor-pointer px-4 py-3 bg-[#42db80] rounded-md text-[#ffffff]">Lire plus</button>
    </div>

    <div class="content-container flex flex-col">
        <div class="image-container w-full">
          <img src="media/Forgot password-bro.png" alt="Description de l'image" class="w-full h-[50%]">
        </div>
        <div id="text-container" class="pb-8 text-container relative h-[100px] overflow-hidden duration-200 expanded">
          <p class="flex flex-col gap-1">
            <h1 class="font-serif text-[#ffffff] text-xl font-bold">Sensibilisation de collecte de dechet</h1>
            <div class="w-full flex flex-col gap-2">
                <p class="text-[#ffffff] opacity-50">
                    123Beaucoup de texte ici... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta eum similique ab sed, praesentium in, deleniti quod magnam provident ipsa error voluptatem! Impedit recusandae commodi culpa laboriosam? Ea, aut corporis.
                    Pariatur nihil vero perferendis sapiente quam veritatis, magni autem! Quis, mollitia corporis in voluptatem eos, quisquam nemo alias, distinctio reiciendis tenetur earum incidunt rem odio cupiditate animi perferendis consectetur beatae.
                    Veniam sunt, beatae magni delectus voluptates similique soluta iusto a quo quae corrupti. In, sed quaerat. Hic suscipit autem saepe repellendus nostrum labore amet. Quas quisquam deleniti amet doloremque ipsam.
                    Rerum quibusdam, quam reprehenderit repellat officia totam doloribus odit fugiat aut illum exercitationem eos, cupiditate illo ipsa ab quidem harum aliquid tempora eius sequi ullam quis. Rem ad illum quo.
                    Quae, corporis non provident explicabo, eligendi eos dolores nam dolorem voluptatibus mollitia quo veniam? Nihil numquam sint, quasi nulla, corrupti possimus esse, quos porro veritatis vel quibusdam nostrum ab!
                </p>
                <div class="w-full flex justify-between items-center">
                    <div>
                        <!-- Icône J'aime -->
                        <i class="bi bi-hand-thumbs-up text-4xl text-[#42db80] like-icon cursor-pointer likeIcon"></i>
                        <!-- Icône J'aime remplie (initiallement cachée) -->
                        <i class="bi bi-hand-thumbs-up-fill text-4xl text-[#42db80] like-icon hidden cursor-pointer likeIconFilled"></i>
                    </div>
                      <div>
                        <!-- Icône Je n'aime pas -->
                        <i class="bi bi-hand-thumbs-down text-4xl text-[#42db80] liked cursor-pointer dislikeIcon"></i>
                        <!-- Icône Je n'aime pas remplie (initiallement cachée) -->
                        <i class="bi bi-hand-thumbs-down-fill liked text-4xl text-[#42db80] hidden cursor-pointer dislikeIconFilled"></i>
                      </div>
                    <i class="bi bi-share text-4xl text-[#42db80]" id="shareBtn"></i>

                     <!-- Popup de partage -->
<div id="sharePopup" class="hidden fixed z-10 left-0 top-0 w-full h-full overflow-auto bg-black bg-opacity-50">
    <div class="bg-white p-5 rounded-lg shadow-lg m-5 max-w-sm mx-auto mt-24">
        <div class="flex justify-between items-center mb-4">
            <h4 class="text-lg font-bold">Partager sur :</h4>
            <i class="bi bi-x-circle text-4xl text-green-950" id="closeBtn"></i>
            <!-- <button id="closeBtn" class="text-black">×</button> -->
        </div>
        <div class="flex justify-around">
            <!-- Icônes des réseaux sociaux -->
            <a href="#" class="text-blue-600"><i class="bi bi-facebook-f"></i></a>
            <a href="#" class="text-blue-400"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-pink-600"><i class="bi bi-instagram"></i></a>
            <!-- Ajoutez d'autres icônes ici -->
        </div>
    </div>
</div>
                    
                </div>
             </div>
          </p>
          
        </div>
        <button id="read-more-btn" class="read-more-btn cursor-pointer px-4 py-3 bg-[#42db80] rounded-md text-[#ffffff]">Lire plus</button>
    </div>

    <div class="content-container flex flex-col">
        <div class="image-container w-full">
          <img src="media/Two factor authentication-rafiki (1).png" alt="Description de l'image" class="w-full h-[50%]">
        </div>
        <div id="text-container" class="pb-8 text-container relative max-h-[100px] overflow-hidden duration-200 expanded">
          <p class="flex flex-col gap-1">
            <h1 class="font-serif text-[#ffffff] text-xl font-bold">Recyclage de dechet</h1>
            <div class="w-full flex flex-col gap-2">
                <p class="text-[#ffffff] opacity-50">
                    Beaucoup de texte ici... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta eum similique ab sed, praesentium in, deleniti quod magnam provident ipsa error voluptatem! Impedit recusandae commodi culpa laboriosam? Ea, aut corporis.
                    Pariatur nihil vero perferendis sapiente quam veritatis, magni autem! Quis, mollitia corporis in voluptatem eos, quisquam nemo alias, distinctio reiciendis tenetur earum incidunt rem odio cupiditate animi perferendis consectetur beatae.
                    Veniam sunt, beatae magni delectus voluptates similique soluta iusto a quo quae corrupti. In, sed quaerat. Hic suscipit autem saepe repellendus nostrum labore amet. Quas quisquam deleniti amet doloremque ipsam.
                    Rerum quibusdam, quam reprehenderit repellat officia totam doloribus odit fugiat aut illum exercitationem eos, cupiditate illo ipsa ab quidem harum aliquid tempora eius sequi ullam quis. Rem ad illum quo.
                    Quae, corporis non provident explicabo, eligendi eos dolores nam dolorem voluptatibus mollitia quo veniam? Nihil numquam sint, quasi nulla, corrupti possimus esse, quos porro veritatis vel quibusdam nostrum ab!
                </p>
                <div class="w-full flex justify-between items-center">
                    <div>
                        <!-- Icône J'aime -->
                        <i class="bi bi-hand-thumbs-up text-4xl text-green-950 like-icon cursor-pointer likeIcon"></i>
                        <!-- Icône J'aime remplie (initiallement cachée) -->
                        <i class="bi bi-hand-thumbs-up-fill text-4xl text-green-950 like-icon hidden cursor-pointer likeIconFilled"></i>
                    </div>
                      <div>
                        <!-- Icône Je n'aime pas -->
                        <i class="bi bi-hand-thumbs-down text-4xl text-green-950 liked cursor-pointer dislikeIcon"></i>
                        <!-- Icône Je n'aime pas remplie (initiallement cachée) -->
                        <i class="bi bi-hand-thumbs-down-fill liked text-4xl text-green-950 hidden cursor-pointer dislikeIconFilled"></i>
                      </div>
                    <i class="bi bi-share text-4xl text-green-950" id="shareBtn"></i>

                     <!-- Popup de partage -->
<div id="sharePopup" class="hidden fixed z-10 left-0 top-0 w-full h-full overflow-auto bg-black bg-opacity-50">
    <div class="bg-white p-5 rounded-lg shadow-lg m-5 max-w-sm mx-auto mt-24">
        <div class="flex justify-between items-center mb-4">
            <h4 class="text-lg font-bold">Partager sur :</h4>
            <i class="bi bi-x-circle text-4xl text-green-950" id="closeBtn"></i>
            <!-- <button id="closeBtn" class="text-black">×</button> -->
        </div>
        <div class="flex justify-around">
            <!-- Icônes des réseaux sociaux -->
            <a href="#" class="text-green-600 text-4xl"><i class="bi bi-whatsapp text-green-600 text-4xl"></i></a>
            <a href="#" class="text-blue-600 text-4xl"><i class="bi bi-facebook-f"></i></a>
            <a href="#" class="text-blue-400 text-4xl"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-pink-600 text-4xl"><i class="bi bi-instagram"></i></a>
            <!-- Ajoutez d'autres icônes ici -->
        </div>
    </div>
</div>
                    
                </div>
             </div>
          </p>
          
        </div>
        <button id="read-more-btn" class="read-more-btn cursor-pointer px-4 py-3 bg-[#42db80] rounded-md text-[#ffffff]">Lire plus</button>
    </div>
    
</section>
@include('layouts.assets.downNav')
<script src="{{asset('js/education.js')}}"></script>
@endsection