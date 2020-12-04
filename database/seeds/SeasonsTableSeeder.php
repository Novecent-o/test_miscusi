<?php

use Illuminate\Database\Seeder;

use App\Season;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            [
                'name' => 'autunno',
            ],
            [
                'name' => 'inverno',
            ],
            [
                'name' => 'primavera',
            ],
            [
                'name' => 'estate',
            ],
        ];

        foreach ($seasons as $season) {
            $newSeason = new Season();
            $newSeason->name = $season['name'];
            $newSeason->save();
        }
    }
}
