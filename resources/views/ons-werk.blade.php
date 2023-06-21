@extends('layouts.default')
@section('page-title', 'Ons werk')

@section('content')
    @include('components.hero')

    <section class="bg-secondary text-white py-12" id="ons-werk">
        <div class="container">
            <h3 class="text-sm text-white uppercase font-bold">{{ $data['smallHeading'] }}</h3>
            <div class="w-12 h-[2px] bg-[#D2153D] my-5"></div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-12">
                @foreach ($data['image'] as $key=>$image)
                    <img src="{{ $image['url'] }}" class="w-full h-[350px]" data-aos="fade-up" data-aos-delay="{{ $key }}00">
                @endforeach
            </div>
        </div>
        <div class="flex justify-center">
            <a href="#contact" class="mt-10 block"><button class="bg-[#D2153D] text-white py-3 px-8">Contact opnemen</button></a>
        </div>
    </section>

@endsection
