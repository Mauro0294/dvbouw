@extends('layouts.default')
@section('page-title', 'Home')
@section('content')
    @include('components.hero')

    @include('components.service_information')
    @include('components.three_columns')
    @include('components.cards')

@endsection
