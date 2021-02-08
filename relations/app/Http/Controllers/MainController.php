<?php


namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use App\Type;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // EMPLOYEES
    public function empIndex() {
        $emps = Employee::all(); //cosa vuol dire Employee:all?
	    // dd($employees); //può aiutarci per vedere i nomi degli elementi che vogliamo estrarre, una volta scritta la return view possiamo eliminarlo
        return view('pages.emp-index', compact('emps'));  //perché non scrivere direttamente $employees? Il compact farà sì che all'interno della nostra View abbiamo la variabile $brands nel PHP
        
    }

    public function empShow($id) {
        $emp = Employee::findOrFail($id); //facciamo in modo che venga preso l'id di ogni elemento, se nell'URL scriviamo http://localhost:8000/employee/1, http://localhost:8000/employee/2 e così via ci apparirà la stampa di ogni elemento rapportato al suo id
        return view('pages.emp-show', compact('emp'));  
        // dd($employee);
    }

    // TASKS
    public function taskIndex() {
        $tasks = Task::all();
        return view('pages.task-index', compact('tasks'));
    }

    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }

    public function taskCreate() {
        return view('pages.task-create');
    }

    //TYPES
    public function typeIndex() {
        $types = Type::all();
        return view('pages.type-index', compact('types'));
    }   

    public function typeShow($id) {
        $type = Type::findOrFail($id);
        return view('pages.type-show', compact('type'));
    }
}
