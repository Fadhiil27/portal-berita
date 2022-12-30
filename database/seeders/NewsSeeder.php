<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facedes\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            FacadesDB::table('news')->insert([
                'title' => fake()->title(),
                'description' => fake()->paragraph(),
                'category' => fake()->sentence(),
                'author' => fake()->email(),
            ]);
        }
    }
}
