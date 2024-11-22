<?php

namespace Database\Seeders;

use App\Models\Supplement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplements = require base_path("database/seeders/data/supplements.php");

        foreach ($supplements as $supplement) {
            Supplement::create($supplement);
        }
    }
}
