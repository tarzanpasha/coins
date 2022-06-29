@extends('layouts.coins.app')
@section('content')
    @include('partials.tabs')
    <section class="home">
        @include('partials.mobile-navigation')

        @include('partials.promoted')



        @include('partials.filters')

        @include('partials.listings')

    </section>
@endsection
