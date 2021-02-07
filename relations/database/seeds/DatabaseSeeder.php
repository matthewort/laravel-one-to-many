<?php

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
        $this->call([
            EmployeeSeeder::class, //va inserito prima l'elemento che non ha chiave esterna
            TaskSeeder::class,
          ]); //non ho capito cosa faccia
    }
}
