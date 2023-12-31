<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'account'=> '7044374592',
                'teacher_id'=> 1
            ],
            [
                'account'=> '9053535850',
                'teacher_id'=> 2

            ],
            [
                'account'=> '0560734347',
                'teacher_id'=> 3

            ],
            [
                'account'=> '4552775808',
                'teacher_id'=> 4
            ],
            [
                'account'=> '4184222869',
                'teacher_id'=> 5
            ],
            [
                'account'=> '4494581399',
                'teacher_id'=> 6

            ],
            [
                'account'=> '3484908166',
                'teacher_id'=> 7

            ],
        ])->each(fn ($payment) => \App\Models\Payment::create($payment));
       
    }
}
