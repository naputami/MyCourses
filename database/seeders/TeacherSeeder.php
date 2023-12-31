<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name'=> 'Hafsah Hanifah',
                'address' => 'Jl. Meteorit No. 108',
                'phone'=> "08977654321"
            ],
            [
                'name'=> 'Kurniawan Sidiq',
                'address' => 'Jl. Durian No. 78',
                'phone'=> "08554324126991"

            ],
            [
                'name'=> 'Ana Putriana',
                'address' => 'Jl. Merkurius No. 2',
                'phone'=> "0833345231410"

            ],
            [
                'name'=> 'Budi Dermawan',
                'address' => 'Jl. Pluto No. 48',
                'phone'=> "0877652431998"
            ],
            [
                'name'=> 'Melani Mentari Hasanah',
                'address' => 'Jl. Teratai No. 25',
                'phone'=> "087764321009"
            ],
            [
                'name'=> 'Muhammad Eka Andara',
                'address' => 'Jl. Matahari No. 99',
                'phone'=> "087765423100"

            ],
            [
                'name'=> 'Tania Silviani',
                'address' => 'Jl. Alamanda No. 87',
                'phone'=> "088754324156601"

            ],
        ])->each(fn ($teacher) => \App\Models\Teacher::create($teacher));
    }
}
