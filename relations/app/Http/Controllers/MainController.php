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

    public function empShow($id) {
        $employee = Employee::findOrFail($id); //facciamo in modo che venga preso l'id di ogni elemento, se nell'URL scriviamo http://localhost:8000/employee/1, http://localhost:8000/employee/2 e così via ci apparirà la stampa di ogni elemento rapportato al suo id
        return view('pages.employees-show', compact('employee'));
        dd($employee);
    }

    public function taskIndex() {
        $tasks = Task::all();
        return view('pages.tasks-index', compact('tasks'));
    }

    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.tasks-show', compact('task'));
    }
}
