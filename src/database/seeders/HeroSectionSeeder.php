<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::firstOrCreate([
            'title' => 'Selamat Datang di Website',
            'subtitle' => 'Kami menyediakan solusi modern dan efisien untuk kebutuhan bisnis digital Anda.',
        ]);
    }
}
