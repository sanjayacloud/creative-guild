<?php

namespace Database\Seeders;

use App\Models\Album;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Nandhaka Pieris',
                'photographer_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'feature_img' => 'assets/img/album/landscape1.jpeg',
                'date' => Carbon::now()->format('Y-m-d'),
                'featured' => true,
                'default' => true,
            ],
            [
                'title' => 'New West Calgary',
                'photographer_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'feature_img' => 'assets/img/album/landscape2.jpeg',
                'date' => Carbon::now()->format('Y-m-d'),
                'featured' => false,
                'default' => true,
            ],
            [
                'title' => 'Australian Landscape',
                'photographer_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'feature_img' => 'assets/img/album/landscape3.jpeg',
                'date' => Carbon::now()->format('Y-m-d'),
                'featured' => false,
                'default' => true,
            ],
            [
                'title' => 'Halvergate Marsh',
                'photographer_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'feature_img' => 'assets/img/album/landscape4.jpeg',
                'date' => Carbon::now()->format('Y-m-d'),
                'featured' => true,
                'default' => true,
            ],
            [
                'title' => 'Rikkis Landscape',
                'photographer_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'feature_img' => 'assets/img/album/landscape5.jpeg',
                'date' => Carbon::now()->format('Y-m-d'),
                'featured' => false,
                'default' => true,
            ],
            [
                'title' => 'Kiddi Kristjans Iceland',
                'photographer_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'feature_img' => 'assets/img/album/landscape6.jpeg',
                'date' => Carbon::now()->format('Y-m-d'),
                'featured' => true,
                'default' => true,
            ],
        ];
        foreach ($data as $item){
            Album::create($item);
        };
    }
}
