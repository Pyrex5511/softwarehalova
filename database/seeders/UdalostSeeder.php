<?php

namespace Database\Seeders;

use App\Models\Udalost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UdalostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Udalost::factory(20)->create();
    }
}
