<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Banner::create([
            'news_tag' => 'NEWS',
            'news_text' => 'Submit referrals online start now.',
            'title' => 'Accelerate workflow — draft contracts 10x faster grow',
            'description' => 'When you join our journey, you are choosing a partner who believes in a healthier more balanced you.',
            'image' => 'images/home-9-admin.webp', // Make sure this path exists in storage/app/public or public
        ]);
    }
}
