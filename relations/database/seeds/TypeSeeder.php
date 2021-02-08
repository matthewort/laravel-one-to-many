<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Type::class, 10) 
        -> create()
        -> each(function($type) {
            $tasks = Task::inRandomOrder()
            -> limit(rand(1, 5)) -> get();
            $type -> tasks() -> attach($tasks);
        });
    }
}
