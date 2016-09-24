<?php

use Illuminate\Database\Seeder;

class IBUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'admin',
            'password' => md5('breadth789')
        ]);
    }
}
