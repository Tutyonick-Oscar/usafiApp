<section class="w-full min-h-screen flex flex-col justify-between bg-[#073529] py-10 px-5">
    <a href="./mdpOblié.html" class="w-full items-start pb-3">
        <i class="bi bi-arrow-left-circle-fill text-[#ffffff] text-2xl"></i>
    </a>
   <div class="">
        <h1 class="font-bold text-xl text-[#ffffff]">Verification de code</h1>
   </div>
    <div>
        <img src="./src/media/Forgot password-bro.png" alt="" class="w-full h-auto rounded-lg object-contain">
    </div>
    <div class="text-center text-[#ffffff] pb-3">
        <p>
            Lorem ipsum dolor sit amet consectetur 
            <span class="text-[#42db80] underline">adipisicing elit.</span> 
             Architecto non 
            facilis eaque ipsum quia eum impedit enim culpa, explicabo, 
            <span class="text-[#42db80] underline">necessitatibus </span>repellat adipisci t
            
        </p>
    </div>
    <div class="w-full flex flex-col gap-10">
        <div class="w-full flex items-center justify-between" contenteditable="true">
            <input type="text" id="champ1" oninput="verifierLongueur(this, 1, 'champ2')"  class="w-1/5 h-14  bg-green-800 rounded-md outline-none text-center text-[#ffffff] font-bold text-4xl" >
            <input type="text" id="champ2" oninput="verifierLongueur(this, 1, 'champ3')"  class="w-1/5 h-14  bg-green-800 rounded-md outline-none text-center text-[#ffffff] font-bold text-4xl" >
            <input type="text" id="champ3" oninput="verifierLongueur(this, 1, 'champ4')"  class="w-1/5 h-14  bg-green-800 rounded-md outline-none text-center text-[#ffffff] font-bold text-4xl" >
            <input type="text" id="champ4" oninput="verifierLongueur(this, 1, 'champ4')"  class="w-1/5 h-14  bg-green-800 rounded-md outline-none text-center text-[#ffffff] font-bold text-4xl" >
        </div>
        <div class="w-full flex items-center justify-center">
            <button type="submit" class="w-full py-2 bg-[#42db80] text-[#ffffff] rounded-2xl uppercase font-bold">
                confirmer
            </button>
        </div>
    </div>
</section>
<script src="{{asset('js/verification.js')}}"></script>