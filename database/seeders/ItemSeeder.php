<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->count(10)->create();
        Item::create([
            'name' => 'Sample Item 1',
            'description' => 'Description of sample item 1.',
        ]);

        Item::create([
            'name' => 'Sample Item 2',
            'description' => 'Description of sample item 2.',
        ]);
    }
}
