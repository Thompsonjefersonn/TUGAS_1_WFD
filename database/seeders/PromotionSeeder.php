<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;
use Carbon\Carbon;

class PromotionSeeder extends Seeder
{

    public function run(): void
    {
    


        Promotion::create([
            'title' => 'Lomba Poster Digital 2025',
            'description' => 'Event lomba desain poster digital untuk mahasiswa. Hadiah jutaan rupiah!',
            'image' => 'promotions/poster.png',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Workshop UI/UX',
            'description' => 'Workshop untuk belajar UI UX untuk mahasiswa dengan menggunakan Figma.',
            'image' => 'promotions/UI.jpeg',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Seminar Teknologi AI ',
            'description' => 'Pelajari Artificial Intelligence bersama dosen tamu dari luar negeri!',
            'image' => 'promotions/AI.jpg',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Lomba Web Design',
            'description' => 'Kompetisi desain web untuk seluruh mahasiswa IT se-Indonesia.',
            'image' => 'promotions/WEB.jpeg',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Hackathon 2025',
            'description' => '24 jam coding challenge dengan hadiah besar dan networking seru!',
            'image' => 'promotions/HACK.png',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Bootcamp Fullstack Laravel',
            'description' => 'Bootcamp intensif Laravel dan Tailwind CSS selama 1 minggu.',
            'image' => 'promotions/fullstack.jpg',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Pelatihan Digital Marketing',
            'description' => 'Belajar strategi marketing online untuk bisnis dan personal branding.',
            'image' => 'promotions/market.jpg',
            'time' => Carbon::parse('2025-01-01'),
        ]);
        Promotion::create([
            'title' => 'Workshop Data Analyst',
            'description' => 'Belajar analisis data menggunakan Excel, SQL, dan Python dalam 3 hari intensif!',
            'image' => 'promotions/data.jpg',
            'time' => Carbon::parse('2025-01-01'),
        ]);
    }
}
