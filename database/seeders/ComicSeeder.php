<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');

        foreach ($arrayComics as $singleComics) {
            $newComics = new Comic();

            $newComics->title = $singleComics['title'];
            $newComics->description = $singleComics['description'];
            $newComics->thumb = $singleComics['thumb'];
            $newComics->price = $singleComics['price'];
            $newComics->series = $singleComics['series'];
            $newComics->sale_date = $singleComics['sale_date'];
            $newComics->type = $singleComics['type'];
            $newComics->artists = implode(",", $singleComics['artists']);
            $newComics->writers = implode(",", $singleComics['writers']);

            $newComics->save();
        }
    }
}
