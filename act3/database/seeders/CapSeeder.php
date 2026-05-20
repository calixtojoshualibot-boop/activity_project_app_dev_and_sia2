<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cap; // Ensure this matches your model name

class CapSeeder extends Seeder
{
    public function run(): void
    {
        $caps = [
            [
                'name' => 'Chicago Bulls 1996 World Champs',
                'brand' => 'Logo 7',
                'era' => '90s',
                'condition' => 'Mint',
                'image_url' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=400'
            ],
            [
                'name' => 'LA Lakers "Showtime" Yellow Wool',
                'brand' => 'New Era',
                'era' => '80s',
                'condition' => 'Near Mint',
                'image_url' => 'https://images.unsplash.com/photo-1596455607563-ad61d3f729da?w=400'
            ],
            [
                'name' => 'Seattle SuperSonics Green Script',
                'brand' => 'Starter',
                'era' => '90s',
                'condition' => 'Deadstock',
                'image_url' => 'https://images.unsplash.com/photo-1521369909029-2afed882baee?w=400'
            ],
            [
                'name' => 'Orlando Magic Pinstripe Blue',
                'brand' => 'Logo 7',
                'era' => '90s',
                'condition' => 'Excellent',
                'image_url' => 'https://images.unsplash.com/photo-1556306535-0f09a537f0a3?w=400'
            ],
            [
                'name' => 'Toronto Raptors Purple Dino',
                'brand' => 'Starter',
                'era' => '1995',
                'condition' => 'Mint',
                'image_url' => 'https://images.unsplash.com/photo-1572307480813-ceb0e59d23c1?w=400'
            ],
            [
                'name' => 'Detroit Pistons Bad Boys Black',
                'brand' => 'American Needle',
                'era' => '80s',
                'condition' => 'Good',
                'image_url' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400'
            ],
            [
                'name' => 'Charlotte Hornets Teal Hive',
                'brand' => 'Sports Specialties',
                'era' => '90s',
                'condition' => 'New Old Stock',
                'image_url' => 'https://images.unsplash.com/photo-1575424909138-46b05e5919ec?w=400'
            ],
            [
                'name' => 'Miami Heat 2006 Script Red',
                'brand' => 'Reebok',
                'era' => '2000s',
                'condition' => 'Worn',
                'image_url' => 'https://images.unsplash.com/photo-1534215754734-18e55d13e346?w=400'
            ],
            [
                'name' => 'Golden State "The City" Blue',
                'brand' => 'Cooperstown',
                'era' => '60s Reissue',
                'condition' => 'Mint',
                'image_url' => 'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=400'
            ],
        ];

        foreach ($caps as $cap) {
            Cap::create($cap);
        }
    }
}