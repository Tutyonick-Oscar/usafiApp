<div>
    <div class="mb-4 relative ">
        <div id="quorters" class="selection hidden w-1/2 absolute top-12 left-[25%] rounded-md border z-10 bg-white flex flex-col  justify-center py-5 items-center">
          @foreach ($zone->quorters as $quorter)
            <p class="quorter w-full text-center py-1 cursor-pointer">
              {{$quorter->name}}
            </p>
          @endforeach
          <span class=" cursor-pointer absolute bottom-0 right-1">
            next
          </span>
        </div>
        <label for="quorter" class="block font-bold mb-2">Spécifier le quartier : </label>
        <input type="text" name="quorter" id="quorter" name="quorter" wire:model.blur='choosenQuorter'
          class="border rounded-lg py-2 px-3 w-full" autocomplete="quorter" value="{{old('quorter')}}" required >
        <span id="showSelection" class=" text-green-950 text-xl absolute top-10 cursor-pointer right-5">
          >
        </span>
        @error('quorter')
            <small class=" text-red-600">
              {{$message}}
            </small>
        @enderror
    </div>
    <div class="mb-4 relative ">
        <div id="avs" class="selection w-1/2 hidden absolute top-12 left-[25%] rounded-md border z-10 bg-white flex flex-col  justify-center py-5 items-center">
          @for ($i = 1; $i <= $n_av; $i++)
            <p id="av" class="quorter av w-full text-center py-1 cursor-pointer">
              {{$i}}
            </p>
          @endfor
          <span class=" cursor-pointer absolute bottom-0 right-1">
            next
          </span>
        </div>
        <label for="material" class="block font-bold mb-2">Avenue de Recyclage : </label>
        <input type="text" name="av" id="material" autocomplete="av"
        class="border rounded-lg py-2 px-3 w-full" required value="{{old('av')}}">
        <button type="button" 
          @if ($n_av==0)
          disabled
          @endif
          id="showAvs" class="
          @if ($n_av==0)
          text-gray-300 cursor-text
          @else
          text-green-950 cursor-pointer 
          @endif
            text-xl absolute top-10 right-5">
          >
        </button>
        @error('av')
            <small class=" text-red-600">
              {{$message}}
            </small>
        @enderror
    </div>
</div>
