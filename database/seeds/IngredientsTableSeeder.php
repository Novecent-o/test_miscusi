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
            ['sale'],
            ['pomodori'],
            ['panna'],
            ['prosciutto'],
            ['aglio'],
            ['limone'],
            ['rucola'],
            ['carne'],
            ['burro'],
            ['grana'],
            ['olio'],
            ['melanzane'],
            ['ricotta'],
            ['pesce'],
        ];

        for ($i_ingredients = 0; $i_ingredients < 14; $i_ingredients++) {
            $newIngredient = new Ingredient();
    
            // Name
            $newIngredient->name = $ingredients[$i_ingredients][0];
    
            // Save
            $newIngredient->save();
        }
    }
}
