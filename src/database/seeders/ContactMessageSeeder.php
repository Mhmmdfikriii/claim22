<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessage::FirstOrCreate([
            'name' => 'Febri',
            'email' => 'febrihafidiansyah@gmail.com',
            'message' => 'Saya Tertarik dengan layanan ClaimTech.',
        ]);
    }
}
