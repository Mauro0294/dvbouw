<section class="container text-white !py-12" id="three_columns">
    <div class="lg:flex justify-between">
        @foreach ($kernwaardes as $key=>$kernwaarde)
            <div class="mb-8 lg:mb-0 flex-0" data-aos="zoom-in-up" data-aos-delay="{{ $key }}00">
                <img src="{{ $kernwaarde['icon']['url'] }}" class="w-16 h-16 lg:w-20 lg:h-20 mx-auto mb-2">
                <h3 class="text-2xl font-bold text-center">{{ $kernwaarde['heading'] }}</h3>
                <p class="text-[#A5A7AA] text-center w-2/3 mx-auto lg:max-w-[500px]">{{ $kernwaarde['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>