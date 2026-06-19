<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'image' => 'life-pets.webp',
                'title' => 'Life Pets',
                'type' => 'Branding & Web Design',
                'description' => 'Complete brand identity and website design for a premium pet care brand.',
            ],
            [
                'image' => 'life-tours.webp',
                'title' => 'Life Tours',
                'type' => 'Travel Agency Design',
                'description' => 'Full website design for a luxury travel and tours agency.',
            ],
            [
                'image' => 'nexuse.webp',
                'title' => 'Nexuse Agency',
                'type' => 'Agency Full Design',
                'description' => 'Complete agency website design with modern, clean aesthetics.',
            ],
            [
                'image' => 'selfie-store.webp',
                'title' => 'Selfie Store',
                'type' => 'E-Commerce Design',
                'description' => 'Online store design for a selfie and photography accessories brand.',
            ],
            [
                'image' => 'selfigo.webp',
                'title' => 'Selfigo',
                'type' => 'Website Mockup',
                'description' => 'Website mockup and UI design for a mobile app platform.',
            ],
            [
                'image' => 'yalla-custom.webp',
                'title' => 'Yalla Custom Code',
                'type' => 'Custom Development',
                'description' => 'Fully custom-coded agency website with bespoke functionality.',
            ],
            [
                'image' => 'yallaa-wp.webp',
                'title' => 'Yallaa WordPress',
                'type' => 'WordPress Development',
                'description' => 'Professional WordPress agency website with custom theme.',
            ],
        ];

        return view('portfolio', compact('projects'));
    }
}
