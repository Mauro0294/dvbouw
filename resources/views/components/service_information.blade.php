<section class="bg-secondary text-white !py-12" id="service_information">
    <div class="container">
        <div class="flex flex-col items-center">
            <h3 class="text-sm text-white mb-5 uppercase font-bold">{{ $informaties[0]['smallHeading'] }}</h3>
            <div class="w-12 h-[2px] bg-[#D2153D]"></div>
        </div>
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-12">
            <div class="lg:max-w-[750px] mx-auto">
                <h2 class="text-center">{{ $informaties[0]['heading'] }}</h2>
                <p class="text-center">{{ $informaties[0]['description'] }}</p>
            </div>
        </div>
    </div>
</section>