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
        About::create([
            'slogan' => 'Where Brotherhood Rides Free, and Adventures Begin!',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam consequuntur ad debitis ea expedita, soluta quaerat ullam adipisci nobis aliquam, omnis eaque maxime odit quas voluptatum quasi, eos iusto',
            'image' => '../assets/images/bike.jpeg',
            'video' => 'https://www.youtube.com/embed/UKlLLKDUsdQ?si=NsjFztcxfKjg1pyu',
        ]);
    }
}