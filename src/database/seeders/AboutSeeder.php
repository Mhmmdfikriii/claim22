<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::FirstOrCreate([
            'logo' => '',
            'title' => 'Claim Tech',
            'description' => 'Claim didirikan pada tahun 2020 dengan misi untuk memberdayakan bisnis melalui transformasi digital.'
        ]);
    }
}
