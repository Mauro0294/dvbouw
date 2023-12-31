<section id="diensten" class="bg-secondary py-12">
    <div class="container uppercase font-medium" id="diensten">
        <h3 class="text-sm text-white">Waar wij mee kunnen helpen</h3>
        <div class="w-12 h-[2px] bg-[#D2153D] my-5"></div>
        <div id="cards" class="grid lg:grid-cols-3 lg:justify-between gap-12 lg:gap-24 uppercase">
            @foreach ($diensten as $key=>$dienst)
            <a href="{{ route('home') }}#contact" data-aos="fade-up" data-aos-delay="{{ $key }}00">
                <div id="card" class="relative">
                    <img src="{{ $dienst['image']['url'] }}" class="w-full">
                    <div class="bg-black text-white absolute top-0 w-full py-1">
                        <p class="text-center text-xl font-bold">{{ $dienst['naam'] }}</p>
                    </div>
                    <button class="absolute bg-black text-white left-0 right-0 top-0 bottom-0 m-auto h-fit w-fit px-3 py-1">Offerte aanvragen</button>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>