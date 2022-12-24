<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $data = todo::all();
        return view("todo/index", compact("data"));
    }

    public function add(){
        return view("todo/add");
    }

    public function insert(Request $req){
        $new = new todo();
        $new->title = $req->title;
        $new->description = $req->description;
        $new->status = 0;
        $new->save();
        return redirect("todos");
    }

    public function edit($id){
        $row = todo::where("id", $id)->first();
        return view("todo/edit", compact("row"));
    }

    public function update(Request $req, $id){
        $row = todo::where("id", $id)->first();
        $row->title = $req->title;
        $row->description = $req->description;
        $row->save();
        return redirect("todos");
    }

    public function delete($id){
        $row = todo::where("id", $id)->first();
        $row->delete();
        return redirect("todos");
    }
}
