<x-layout.app>

    <section class="w-2/3 mx-auto py-24">

        <div class="flex justify-center gap-3">
    
            @foreach($user_tiles as $user_tile)
                <div class="w-20 aspect-square px-1 overflow-hidden bg-[#decdab] border-2 border-[#a2a07d] rounded shadow ">
                    <div class="w-full h-full flex justify-center items-center text-5xl">
                        {{$user_tile['letter']}}
                    </div>
                    <span class="flex justify-end text-base -translate-y-full">
                        {{$user_tile['letter_score']}}
                    </span>
                </div>
            
            @endforeach

        </div>

    </section>

</x-layout.app>