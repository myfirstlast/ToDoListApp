<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class todolistController extends Controller
{
    public function index() {
        return view('home', [
            'todolist' => Todolist::all()
        ]);
    }

    public function viewall() {
        return view('viewall', [
            'todolist' => Todolist::filter(request(['search']))->get()
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
        return redirect('/create');
    }

    public function about () {
        return view('about');
    }

    public function contact () {
        return view('contact');
    }
}
