@extends('layouts.base')

@section('title', 'Detail Promosi')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4">{{ $promo->title }}</h2>
        <img class="rounded-lg w-full h-72 object-cover mb-6" src="{{ asset('storage/' . $promo->image) }}" alt="Promo Image">

        <p class="text-lg text-gray-700 mb-4">{{ $promo->description }}</p>

        @if($promo->desc1)
            <p class="text-lg text-gray-600 mb-4"><strong></strong> {{ $promo->desc1 }}</p>
        @endif
        @if($promo->desc2)
            <p class="text-lg text-gray-600 mb-4"><strong></strong> {{ $promo->desc2 }}</p>
        @endif
        @if($promo->desc3)
            <p class="text-lg text-gray-600 mb-4"><strong></strong> {{ $promo->desc3 }}</p>
        @endif
        @if($promo->time)
        <p class="text-lg text-gray-600 mb-4"><strong>Hari:</strong> {{ $promo->time }}</p>
        @endif
    </div>
</div>
@endsection
