<?php

use App\Employee;
use Illuminate\Database\Seeder;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 10) -> create();  //il 50 è riferito al numero di employee che mi interessa avere nella tabella
    }
}
