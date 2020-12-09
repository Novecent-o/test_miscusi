<?php

use Illuminate\Database\Seeder;

use App\Dish;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'name' => 'Spaghetti allo scoglio',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Pasta alla carbonara',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Pasta al pesto',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Pennette al pomodoro',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Gnocchi ai 4 formaggi',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Maccheroni burro e salvia',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
            [
                'name' => 'Lasagne alla bolognese',
                'method' => 'Si consiglia di consumare subito gli spaghetti allo scoglio; è possibile conservare in frigorifero in un contenitore di vetro e coperto con pellicola per un giorno al massimo. Sconsigliamo la congelazione.',
                'type' => 'pasta integrale',
                'image' => 'https://www.giallozafferano.it/images/182-18285/Spaghetti-allo-scoglio_450x300.jpg',
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish = new Dish();
            $newDish->name = $dish['name'];
            $newDish->method = $dish['method'];
            $newDish->season_id = rand(1, 4);
            $newDish->type = $dish['type'];
            $newDish->price = rand(5, 150); // possibili errori per via del float
            $newDish->image = $dish['image'];
            $newDish->save();

            $numbers = range(1, 14);
            shuffle($numbers);

            for ($i_ingredients = 0; $i_ingredients < rand(1, 14); $i_ingredients++) {
                
                $newDish->ingredients()->attach($numbers[$i_ingredients]);
            }
        }

    }
}
