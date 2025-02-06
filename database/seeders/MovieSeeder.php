<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(base_path('public/movies.json'));
        $datas = json_decode($json ,true);

        foreach($datas as $key=>$movies){
            foreach($movies as $movie){
                $newMovies = Movies::where('title',$movie['title'])->first();
                if($newMovies){
                    continue;
                }
                else{
                    $newmovie = new Movies();
                    $newmovie->title = $movie['title'];
                    $newmovie->rank = $movie['rank'];
                    $newmovie->movieId = $movie['id'];
                    $newmovie->save();
                }
            }
        }
    }
}
