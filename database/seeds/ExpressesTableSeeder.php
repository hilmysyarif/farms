<?php

use Illuminate\Database\Seeder;

class ExpressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $time = date('Y-m-d');
        DB::table('expresses')->insert([
            'name' => '默认快递',
            'config' => '',
            'created_at' => $time,
            'updated_at' => $time
        ]);
    }
}
