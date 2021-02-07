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
        factory(Task::class, 50) -> create();  //il 50 è riferito al numero di employee che mi interessa avere nella tabella
    }
}
