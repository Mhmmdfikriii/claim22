<?php

namespace Database\Seeders;

use App\Models\FeatureSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeatureSection::FirstOrCreate([
        'title'=> 'Kenapa memilih ClaimTest',
        'description'=> 'Platform kami dibangun dengan pilar-pilar Keunggulan.',

        ]);
    }
}
