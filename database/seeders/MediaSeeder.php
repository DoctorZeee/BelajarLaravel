<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert([
            [
                'Link' => 'https://www.facebook.com/',
                'icon' => 'uil uil-facebook-f',
            ],
            [
                'Link' => 'https://www.instagram.com/',
                'icon' => 'uil uil-instagram', // seharusnya ini bukan facebook-f
            ]
        ]);

    }
}
