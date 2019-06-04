<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id = 1;
        $task->title = "Viec lam 1";
        $task->save();

        $task = new Task();
        $task->id = 2;
        $task->title = "Viec lam 1";
        $task->save();
    }
}
