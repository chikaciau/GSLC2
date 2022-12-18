<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_pictures')->insert(
            [
                [
                    'image' => "https://picsum.photos/200",
                    'title' => "Nulla Sed",
                    'description' => "Lorem ipsum dolor sit amet. Et labore minus et modi voluptates aut nulla facere
                        et nostrum nobis est dignissimos dolorem aut deserunt facere aut harum consequuntur. Et magnam
                        asperiores et debitis temporibus sit inventore sequi. In maxime pariatur sit nemo maxime aut
                        molestias voluptatem et sunt enim aut reprehenderit labore qui quibusdam beatae rem deserunt
                        dolorum. Qui reprehenderit rerum et officiis consequuntur eum molestiae officiis ex distinctio
                        dolorem.",
                    'picture_taken' => Carbon::parse('2021-02-02'),
                ],
                [
                    'image' => "https://picsum.photos/200",
                    'title' => "Anguna Anemoa",
                    'description' => "Lorem ipsum dolor sit amet. Et labore minus et modi voluptates aut nulla facere
                        et nostrum nobis est dignissimos dolorem aut deserunt facere aut harum consequuntur. Et magnam
                        asperiores et debitis temporibus sit inventore sequi. In maxime pariatur sit nemo maxime aut
                        molestias voluptatem et sunt enim aut reprehenderit labore qui quibusdam beatae rem deserunt
                        dolorum. Qui reprehenderit rerum et officiis consequuntur eum molestiae officiis ex distinctio
                        dolorem.",
                    'picture_taken' => Carbon::parse('2020-12-05'),
                ]
            ]); 
    }
}
