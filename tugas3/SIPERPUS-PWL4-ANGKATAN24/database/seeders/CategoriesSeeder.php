<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category' => 'History', 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Mystery', 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Horror', 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Sci-fi', 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Thriller', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
