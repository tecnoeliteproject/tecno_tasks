<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Tarefa::factory(30)->create();
    }
}
