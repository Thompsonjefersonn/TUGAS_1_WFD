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
            'desc1' => 'Tunjukkan kreativitasmu dalam mendesain poster digital yang inspiratif dan menarik.',
            'desc2' => 'Kompetisi ini terbuka untuk mahasiswa dari berbagai jurusan yang memiliki passion dalam desain grafis.',
            'desc3' => 'Dapatkan kesempatan memenangkan hadiah jutaan rupiah dan tampil sebagai desainer terbaik!',
        ]);
        Promotion::create([
            'title' => 'Workshop UI/UX',
            'description' => 'Workshop untuk belajar UI UX untuk mahasiswa dengan menggunakan Figma.',
            'image' => 'promotions/UI.jpeg',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Pelajari dasar dan prinsip desain UI/UX yang efektif dalam dunia digital.',
            'desc2' => 'Hands-on workshop dengan mentor profesional menggunakan Figma.',
            'desc3' => 'Bangun portofolio desain interaktif dan tingkatkan peluang karier di industri teknologi!',
        ]);
        Promotion::create([
            'title' => 'Seminar Teknologi AI ',
            'description' => 'Pelajari Artificial Intelligence bersama dosen tamu dari luar negeri!',
            'image' => 'promotions/AI.jpg',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Dapatkan wawasan terbaru tentang Artificial Intelligence dari pakar internasional.',
            'desc2' => 'Pelajari bagaimana AI mengubah berbagai industri dan kehidupan sehari-hari.',
            'desc3' => 'Kesempatan eksklusif untuk networking dengan ahli AI dan sesama peserta.',
        ]);
        Promotion::create([
            'title' => 'Lomba Web Design',
            'description' => 'Kompetisi desain web untuk seluruh mahasiswa IT se-Indonesia.',
            'image' => 'promotions/WEB.jpeg',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Tantang dirimu dalam merancang tampilan website yang modern dan responsif.',
            'desc2' => 'Kompetisi terbuka untuk mahasiswa IT dan desain dari seluruh Indonesia.',
            'desc3' => 'Tunjukkan keahlianmu dan menangkan hadiah menarik!',
        ]);
        Promotion::create([
            'title' => 'Hackathon 2025',
            'description' => '24 jam coding challenge dengan hadiah besar dan networking seru!',
            'image' => 'promotions/HACK.png',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Uji keterampilan coding-mu dalam tantangan intensif selama 24 jam.',
            'desc2' => 'Bekerja dalam tim untuk membangun solusi inovatif berbasis teknologi.',
            'desc3' => 'Menangkan hadiah besar dan perluas jaringanmu dengan para profesional industri!',
        ]);
        Promotion::create([
            'title' => 'Bootcamp Fullstack Laravel',
            'description' => 'Bootcamp intensif Laravel dan Tailwind CSS selama 1 minggu.',
            'image' => 'promotions/fullstack.jpg',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Kuasai pengembangan web dengan Laravel dan Tailwind CSS dalam 1 minggu.',
            'desc2' => 'Materi eksklusif dari mentor berpengalaman dengan studi kasus real-world.',
            'desc3' => 'Cocok untuk developer pemula maupun yang ingin meningkatkan skill mereka.',
        ]);
        Promotion::create([
            'title' => 'Pelatihan Digital Marketing',
            'description' => 'Belajar strategi marketing online untuk bisnis dan personal branding.',
            'image' => 'promotions/market.jpg',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Pelajari strategi digital marketing untuk meningkatkan bisnis dan personal branding.',
            'desc2' => 'Bahas SEO, media sosial, dan iklan online secara mendalam.',
            'desc3' => 'Cocok bagi pemilik bisnis, content creator, dan marketer profesional.',
        ]);
        Promotion::create([
            'title' => 'Workshop Data Analyst',
            'description' => 'Belajar analisis data menggunakan Excel, SQL, dan Python dalam 3 hari intensif!',
            'image' => 'promotions/data.jpg',
            'time' => Carbon::parse('2025-01-01'),
            'desc1' => 'Temukan cara mengolah data dengan Excel, SQL, dan Python.',
            'desc2' => 'Workshop intensif selama 3 hari dengan studi kasus nyata.',
            'desc3' => 'Bangun dasar yang kuat untuk berkarier sebagai Data Analyst profesional.',
        ]);
    }
}
