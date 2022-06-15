<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class todolistController extends Controller
{
    public function index() {
        return view('home', [
            'todolist' => Todolist::all()
        ]);
    }

    public function viewall() {
        return view('viewall', [
            'todolist' => Todolist::filter(request(['search']))->simplePaginate(5)
        ]);
    }

    public function create() {
        return view('create', [
            'todolist' => Todolist::all()
        ]);
    }

    public function store (Request $request) {
        $formFields = $request->validate([
            'content' => ['required', Rule::unique('todolists', 'content')]
        ]);
        Todolist::create($formFields);
        Session::flash('message', 'Task created successfully!');
        return redirect('/create');
    }

    public function edit (Todolist $task) {
        return view('edit', ['task' => $task]);
    }

    public function update (Request $request, Todolist $task) {
        $formFields = $request->validate([
            'content' => ['required']
        ]);

        $task->update($formFields);
        return redirect('/viewall')->with('message', 'Task updated successfully!');
    }

    public function destroy (Todolist $task) {
        $task->delete();
        return redirect('viewall');
    }

    public function about () {
        return view('about');
    }

    public function contact () {
        return view('contact');
    }
}
