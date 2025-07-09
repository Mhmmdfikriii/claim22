<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $testimonials = [
        [
            'content' => 'Sejak menggunakan Helios Analytics, pengambilan keputusan kami menjadi 90% lebih cepat dan akurat. sangat di recomendasikan.',
            'author_name' => 'Budi Santoso',
            'author_position' => 'Ceo , Maju jaya group',
            'author_photo' => '',
        ],
        [
            'content' => 'Implementasi Titan CRM sangat mulus, Tim Suport ClaimTech sangat responsif dan membantu kami di setiap langkah.',
            'author_name' => 'Budi Mulyono',
            'author_position' => 'Manager Operasional, Sinar Abadi',
            'author_photo' => '',   
        ],
        [
            'content' => 'Aegis Security memberikan kami ketenangan pikiran. Sistem keamanan kami jauh lebih kuat dari sebelumnya.',
            'author_name' => 'Budi Wijaya',
            'author_position' => 'IT Director, Cipta Karya',
            'author_photo' => '',

        ],
    ];
    
            foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}
