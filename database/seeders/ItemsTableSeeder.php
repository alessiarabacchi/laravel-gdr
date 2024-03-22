<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->delete();
        $json = File::get('database/data/items.json'); 
        $items = json_decode($json);

        foreach ($items as $item) {
            DB::table('items')->insert([
                'name' => $item->name,
                'description' => '', 
                'slug' => $item->slug,
                'category' => $item->category,
                'type' => $item->type,
                'weight' => $item->weight,
                'cost' => $item->cost,
            ]);
        }
    }
}

