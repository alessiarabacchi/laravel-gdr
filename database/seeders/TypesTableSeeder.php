<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader; 

class TypesTableSeeder extends Seeder
{
    public function run()
    {
        // Azzera la tabella
        DB::table('types')->truncate();

        // Carica i dati dal file CSV
        $csv = Reader::createFromPath(storage_path('app/public/types.csv'), 'r');
        $csv->setHeaderOffset(0);

        // Importa i record
        foreach ($csv as $record) {
            DB::table('types')->insert([
                'name' => $record['name'],
                'slug' => $record['slug'],
                'image' => $record['image'],
                'description' => $record['description'],
            ]);
        }
    }
}
