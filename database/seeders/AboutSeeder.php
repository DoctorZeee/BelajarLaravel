<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert(
            [
                'name' => 'Joe Doe',
                'home_image' => 'no-image.png',
                'banner_image' => 'no-image.png',
                'phone' => '+1234567890',
                'email' => 'joedoe@gmail.com',
                'address' => '123 Main St, Anytown, USA',
                'description' => 'Full-stack developer with over 10 years of experience in web development, specializing in Laravel and Vue.js.',
                'summary' => 'High Level Experience in Web Development',
                'tagline' => 'Building the future, one line of code at a time.',
                'cv' => 'joedoe.pdf',

            ]
        );
    }
}
