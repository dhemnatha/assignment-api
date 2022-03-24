<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $csvFile = fopen(base_path("database/data/category.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Category::create([
                    "category_id" => $data['0'],
                    "count" => $data['1'],
                    "parent_id" => $data['2'],
                    "name" => $data['3']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
