<header class="font-bold text-white">
    <div class="flex justify-between items-center container">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" class="w-20 py-2"></a>
        <ul class="hidden lg:flex text-lg gap-16 font-bold py-8">
            <a href="{{ route('home') }}" data-aos="fade-down" data-aos-delay="100"><li>HOME.</li></a>
            <a href="{{ route('home') }}#diensten" data-aos="fade-down" data-aos-delay="200"><li>DIENSTEN.</li></a>
            <a href="{{ route('home') }}#contact" data-aos="fade-down" data-aos-delay="300"><li>CONTACT.</li></a>
            <a href="{{ route('ons-werk') }}"data-aos="fade-down" data-aos-delay="400"><li>ONS WERK.</li></a>
            <a href="https://www.facebook.com/p/DV-Onderhoud-100064673394829/"data-aos="fade-down" data-aos-delay="500" target="_blank" rel="noreferrer" class="mt-1"><li><img src="{{ asset('images/facebook.png') }}" class="w-6 h-6"></li></a>
        </ul>
        <div class="block lg:hidden">
            <button id="hamburger-btn" class="hamburger-btn">
                <span class="hamburger-line" data-aos="fade-down" data-aos-delay="400"></span>
                <span class="hamburger-line" data-aos="fade-down" data-aos-delay="200"></span>
                <span class="hamburger-line" data-aos="fade-down"></span>
            </button>
        </div>
    </div>
    <ul id="mobile-menu" class="hidden lg:hidden justify-between font-bold !py-4 container text-lg">
        <a href="{{ route('home') }}"><li class="text-center bg-[#07233B] py-2 mb-4">HOME.</li></a>
        <a href="{{ route('home') }}#diensten"><li class="text-center bg-[#07233B] py-2 mb-4">DIENSTEN.</li></a>
        <a href="{{ route('home') }}#contact"><li class="text-center bg-[#07233B] py-2 mb-4">CONTACT.</li></a>
        <a href="{{ route('ons-werk') }}"><li class="text-center bg-[#07233B] py-2">ONS WERK.</li></a>
    </ul>
</header>