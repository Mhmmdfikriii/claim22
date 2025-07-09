<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactInfo::UpdateOrCreate(
            ['id' => 1],
        [
            'address' => 'Jl. inovasi No.123, Jakarta, Indonesia',
            'email' => 'muhammadfikrii77xc@gmail.com',
            'phone' => '081221656409',
        ]
        );
    }
}
