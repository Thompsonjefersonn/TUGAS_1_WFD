@extends('layouts.base')

@section('title', 'Home')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-white shadow-lg rounded-2xl p-8">
        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Building Stronger Campus Communities through Collaboration and Engagement</h2>
            <p class="text-gray-600 mb-6">Through collaboration, the diverse talents and perspectives of students, faculty, and staff come together to create an inclusive campus environment. This approach empowers everyone to actively participate in campus activities, fostering personal development, academic success, and stronger connections within the community. PromoKampus is here to promote exciting campus events, opportunities, and initiatives that bring everyone together to thrive.</p>
            <a href="{{ route('promotions') }}"  class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-indigo-700 transition">Get Started</a>
        </div>
        
        <!-- Image -->
        <div>
            <img src="images/banner.png" alt="Collaboration" class="w-full rounded-lg shadow-lg">
        </div>
    </div>
</section>


@endsection