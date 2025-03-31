@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="relative h-screen bg-cover bg-center" style="background-image: url('images/kampus.png');">
    <div class="absolute inset-0 bg-black opacity-10"></div> 

    <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
        <div>
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di PromoKampus</h1>
            <p class="text-xl">Temukan kegiatan-kegiatan menarik dan eksklusif di kampus Anda!</p>
            <a href="{{ route('promotions') }}" class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-full text-lg font-semibold transition duration-300">Lihat Promosi</a>
        </div>
    </div>
</div>


@endsection
