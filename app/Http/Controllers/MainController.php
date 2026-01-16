<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Operations;
use Illuminate\Support\Facades\Request;

class MainController extends Controller
{
    public function index()
    {
        // load user's notes
        $id = session('user.id');
        $user = User::find($id)->toArray();
        $notes = User::find($id)->notes()->get()->toArray();



        // show home view
        return view('home', ['notes' => $notes]);
    }

    public function newNote()
    {
        // show new note view
        return view('new_note');
    }

    public function newNoteSubmit(Request $request)
    {
        echo "I'm creating a new note.";
    }

    public function editNote($id)
    {
        $id = Operations::decryptId($id);
        echo "I'm editing note with ID: " . $id;
    }

    public function deleteNote($id)
    {
        $id = Operations::decryptId($id);
        echo "I'm delete note with ID: " . $id;
    }
}
