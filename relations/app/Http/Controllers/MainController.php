<?php


namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function empIndex() {
        $employees = Employee::all(); //cosa vuol dire Employee:all?
	    // dd($employees); //può aiutarci per vedere i nomi degli elementi che vogliamo estrarre, una volta scritta la return view possiamo eliminarlo
        return view('pages.employees-index', compact('employees'));  //perché non scrivere direttamente $employees? Il compact farà sì che all'interno della nostra View abbiamo la variabile $brands nel PHP
    }

    public function taskIndex() {
        $tasks = Task::all(); //cosa vuol dire Employee:all?
	    // dd($employees); //può aiutarci per vedere i nomi degli elementi che vogliamo estrarre, una volta scritta la return view possiamo eliminarlo
        return view('pages.tasks-index', compact('tasks'));  //perché non scrivere direttamente $employees? Il compact farà sì che all'interno della nostra View abbiamo la variabile $brands nel PHP
    }
}
