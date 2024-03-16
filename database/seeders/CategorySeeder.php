<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Komputer',
            'Bahasa',
            'Sains',
            'Hobby',
            'Komunikasi',
            'Hukum',
            'Agama',
            'Populer',
            'Komik'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
