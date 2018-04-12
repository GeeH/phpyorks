<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => 'Buy a chicken',
        ]);
        DB::table('todos')->insert([
            'title' => 'Name it',
        ]);
        DB::table('todos')->insert([
            'title' => 'Profit?',
        ]);
    }
}
