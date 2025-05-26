<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NoteController extends Controller
{
    public function index() {
        $notes = Notes::find($id);
        return view('notes.index', ['notes' => $notes]);
    }

    public function create() {
        return view('notes.create');
    }
    
    public function store(Request $request) {
        Notes::create([
            'Title' => $request["Title"] , 'content' => $request["content"]
        ]);
        return redirect('/index');
    }

    public function show($id)
    {
        $notes = Notes::find($id);
        return view('notes.show', ['note' => $notes]);
    }

    public function destroy($id){
        $notes = Notes::find($id);
        $notes->delete();
        return redirect('/index');
    }

    public function edit($id) {
        $notes = Notes::all();
        return view('notes.edit', ['note' => $notes]);
    }

    public function update(Request $request, $id)
    {
        $notes =Notes::all();

        $notes->title = $request->title;
        $notes->content = $request->content;
        $notes->save();

        return redirect('/index');
    }


}
