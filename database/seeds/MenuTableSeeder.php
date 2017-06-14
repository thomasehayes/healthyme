<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salad = new \App\Menu();
        $salad->item = 'Chicken Caesar Salad';
        $salad->description = 'Romaine lettuce, parmesan cheese and croutons topped with grilled chicken';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->item = 'Chef Salad';
        $salad->description = 'Mixed greens, ham, turkey, tomato, cucumber, hard boiled egg, and cheese*';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->item = 'Tuna Pasta Salad';
        $salad->description = 'Mixed greens, our homemade Tuna Salad, pasta salad, tomato, red onion, cucumber*';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->item = 'Chicken Salad';
        $salad->description = 'Mixed greens, our homemade Chicken Salad, pasta salad, tomato, red onion, cucumber*';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->item = '7 Vegtable Salad';
        $salad->description = 'Romaine lettuce, spring mix, fresh spinach, tomato, cucumber, red onion, green bell peppers*';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->item = 'Greek Salad';
        $salad->description = 'Mixed greens, tomato, red onion, black olives, pepperoncini, feta cheese with Greek dressing';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->item = 'Grilled Chicken Salad';
        $salad->description = 'Mixed greens, tomato, cucumber, red onion, cheese tortilla strips, and grilled chicken*';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->salads = 'Spinach Salad';
        $salad->description = 'Fresh spinach, mushrooms, roasted pecans, crispy bacon, sweet strawberries, feta cheees, strawberry vinaigrette';
        $salad->price = "9.59";
        $salad->save();

        $salad = new \App\Menu();
        $salad->salads = 'House Salad';
        $salad->description = 'Romaine lettuce, parmesan cheese and croutons topped with grilled chicken';
        $salad->price = "4.99";
        $salad->save();

        $salad = new \App\Menu();
        $salad->salads = 'Caesar Salad';
        $salad->description = 'Romaine lettuce, parmesan cheese and croutons topped with grilled chicken';
        $salad->price = "4.99";
        $salad->save();
    }
}
