<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use App\Models\ContactMessage;
use App\Models\ContactSection;
use App\Models\Feature;
use App\Models\FeatureSection;
use App\Models\HeroSection;
use App\Models\ProductSection;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SeoSeeder::class,
            HeroSectionSeeder::class,
            AboutSeeder::class,
            TeamSeeder::class,
            TeamSectionSeeder::class,
            FeatureSeeder::class,
            FeatureSectionSeeder::class,
            ProductSectionSeeder::class,
            ProductSeeder::class,
            TestimonialSeeder::class,
            TestimonialSectionSeeder::class,
            ContactInfoSeeder::class,
            ContactMessageSeeder::class,
            ContactSectionSeeder::class,
        ]);
    }
}
