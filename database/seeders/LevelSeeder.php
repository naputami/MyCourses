<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name'=> 'SD'
            ],
            [
                'name'=> 'SMP'
            ],
            [
                'name'=> 'SMA'
            ],
        ])->each(fn ($level) => \App\Models\Level::create($level));
    }
}
