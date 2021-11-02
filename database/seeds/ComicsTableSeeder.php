<?php

use Illuminate\Database\Seeder;
use App\Comics;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicons = config('comics');
        foreach ($comicons as $comics){
            $new_comics = new Comics();
            $new_comics->title = $comics['title'];
            $new_comics->description = $comics['description'];
            $new_comics->thumb = $comics['thumb'];
            $new_comics->price = $comics['price'];
            $new_comics->series = $comics['series'];
            $new_comics->sale_date = $comics['sale_date'];
            $new_comics->type = $comics['type'];
            $new_comics->save();
        }
    }
}
