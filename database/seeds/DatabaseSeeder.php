<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        $this->call(IBAboutTableSeeder::class);
//        $this->call(IBContactTableSeeder::class);
//        $this->call(IBJobsTableSeeder::class);
//        $this->call(IBNewsTableSeeder::class);

//        $this->call(IBProjectsTableSeeder::class);

//        $this->call(IBPublicationsTableSeeder::class);
//        $this->call(IBUserTableSeeder::class);

        $this->call(IBSixProjectsSeeder::class);
    }
}
