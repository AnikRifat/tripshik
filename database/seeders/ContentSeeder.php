<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            'name' => 'website',
            'about' => 'about website',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'yt_link' => '#youtube',
            'slider_text' => 'slider Text',
            'slider_image' => 'slider.jpg',
            'email' => 'email@email.com',
            'phone' => '000 000 0000',
            'address' => 'adress  book',
        ];
        Content::create($contents);
    }
}
