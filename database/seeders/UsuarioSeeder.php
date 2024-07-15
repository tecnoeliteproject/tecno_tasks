<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'jamba da Silva',
            'email' => 'jamba@task.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'Roberto da Silva',
            'email' => 'roberto@task.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'Zacarias da Silva',
            'email' => 'zacarias@task.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
