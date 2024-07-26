<?php

namespace Database\Seeders;

use App\Models\Convocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Convocation::factory(10)->create();
    }
}
