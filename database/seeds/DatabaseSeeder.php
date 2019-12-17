<?php

use App\Employees;
use App\Jobs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // factory(User::class)->create();
         $jobs = factory(Jobs::class, 10)->create(); // insert 10 rows
        $employees = factory(Employees::class, 150)->create(); // insert 150 rows
    }
}
