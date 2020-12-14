<?php

use Illuminate\Database\Seeder;

use App\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            'sale',
            'pomodori',
            'panna',
            'prosciutto',
            'aglio',
            'limone',
            'rucola',
            'carne',
            'burro',
            'grana',
            'olio',
            'melanzane',
            'ricotta',
            'pesce',
        ];
        // for ($i=0; $i < count($ingredients) ; $i++) { 
        //     $newIngredient = new Ingredient();
        //     $ingredient = $ingredients[$i];
        //     $newIngredient->name = $ingredient;
        //     $newIngredient->save();
        // }
        foreach ($ingredients as $ingredient) {
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredient;
            $newIngredient->save();
        }

    }
}
