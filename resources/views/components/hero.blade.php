<section id="hero" class="h-[400px] lg:h-[92vh] text-white">
    <div class="container">
        <div class="w-full flex flex-col items-center pt-12 lg:pt-32">
            <h1 class="text-center">{{ $hero['heading'] }}</h1>
            <p class="mt-5 lg:w-1/2 text-center text-lg">{{ $hero['description'] }}</p>
            <a href="{{ route('home') }}#contact" class="mt-10 block"><button class="bg-[#D2153D] text-white py-3 px-8">Offerte aanvragen</button></a>
            <div class="absolute bottom-8 hidden lg:block" id="scroll-text">
                <p>Scroll down</p>
                <div class="h-[50px] w-[1px] bg-white mx-auto mt-1"></div>
            </div>
        </div>
    </div>
</section>