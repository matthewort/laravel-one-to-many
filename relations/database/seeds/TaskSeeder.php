<?php

use App\Task;
use App\Employee;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 50)
        -> make()
        -> each(function($task) {
            // $task -> employee_id = 1;
            $emp = Employee::inRandomOrder() -> first();
            $task -> employee() -> associate($emp); //perché associate non attach?
            $task -> save();
        });   
    }
}
