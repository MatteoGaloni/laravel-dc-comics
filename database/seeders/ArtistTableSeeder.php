<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        // $comics_ids= Comic::pluck('id')->toArray(); 

        foreach ($comics as $comic) {

            foreach ($comic['artists'] as $artist => $value) {
                $newArtist = new Artist();
                $newArtist->name = $artist;
                $newArtist->comic_id = $artist + 1;
                $newArtist->save();
            }
        }
    }
}
