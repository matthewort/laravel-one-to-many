<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //crea la migration
    {
        Schema::table('tasks', function (Blueprint $table) { //il motivo di tasks?
            $table -> foreign('employee_id', 'task-employee') //'task-employee' è un nome che decido per la foreign key
                   -> references('id')
                   -> on('employees'); 
        });

        Schema::table('task_type', function (Blueprint $table) {
            $table -> foreign('task_id', 'tt-task') //'task-employee' è un nome che decido per la foreign key
                   -> references('id')
                   -> on('tasks'); 
            $table -> foreign('type_id', 'tt-type')
                    -> references('id')
                    -> on('types'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_type', function(Blueprint $table) {
            $table -> dropForeign('tt-type');
            $table -> dropForeign('tt-task');
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table -> dropForeign('task-employee'); 
        });
    }
}
