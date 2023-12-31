<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name'=> 'Mutia Putri',
                'address' => 'Jl. Cempaka No. 1',
                'phone'=> "08997625342",
                'level_id' => 3,
            ],
            [
                'name'=> 'Andika Rizki',
                'address' => 'Jl. Sakura No. 32',
                'phone'=> "08997625117",
                'level_id' => 3,

            ],
            [
                'name'=> 'Carissa Maharani',
                'address' => 'Jl. Rambutan No. 15',
                'phone'=> "083976258890",
                'level_id' => 3,

            ],
            [
                'name'=> 'Kevin Alfiansyah',
                'address' => 'Jl. Padma No. 45',
                'phone'=> "08665432001",
                'level_id' => 2,

            ],
            [
                'name'=> 'Quinsha Mustika Larasati',
                'address' => 'Jl. Melati No. 2',
                'phone'=> "0834425167890",
                'level_id' => 2,

            ],
            [
                'name'=> 'Daniel Rizki Putra',
                'address' => 'Jl. Lengkeng No. 1',
                'phone'=> "085234431908",
                'level_id' => 1,

            ],
            [
                'name'=> 'Syakila Annisa',
                'address' => 'Jl. Mawar No. 9',
                'phone'=> "0887545241312",
                'level_id' => 1,

            ],
        ])->each(fn ($student) => \App\Models\Student::create($student));
    }
}
