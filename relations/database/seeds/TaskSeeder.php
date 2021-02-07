<?php

use App\Task;
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
            $task -> employee_id = 100;
            $task -> save();
        });   
    }
}
