<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    //

    public function index(){
        $u_id = Auth::user()->id;
        $todos = Todo::all();

        return view("todo", compact("todos"));
    }
}
