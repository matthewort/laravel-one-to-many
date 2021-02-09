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
        $emps = Employee::all();
        $types = Type::all();
        return view('pages.task-create', compact('emps', 'types'));
    }

    public function taskStore(Request $request) {
        $data = $request -> all();

        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::make($request -> all());
        $task -> employee() -> associate($emp); //errore (se provo a creare una nuova task mi dà errore)
        $task -> save();

        $typs = Type::findOrFail($data['types']);
        $task -> types() -> attach($typs);  //aggiungo le righe senza eliminare le relazioni non selezionate
        // dd($task);

    }

    public function taskEdit($id) {
        $emps = Employee::all();
        $types = Type::all();

        $task = Task::findOrFail($id);

        return view('pages.task-edit', 
        compact('emps', 'types', 'task'));
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

    public function taskUpdate(Request $request, $id) {
        $data = $request -> all();
        // dd($data);
        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::findOrFail($id);
        $task -> update($data); //aggiorno i dati
        $task -> employee() -> associate($emp);
        $task -> save();
        
        if (array_key_exists('types', $data)) {
        $typs = Type::findOrFail($data['types']);
        $task -> types() -> sync($typs); //col sync posso rimuovere e aggiungere dati, ma non mi funziona
        }
    }
}
