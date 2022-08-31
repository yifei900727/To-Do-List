<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;

class TodolistController extends Controller
{
    public function index(){

        $todolists = Todolist::paginate(5);
        return view('todolist.index',['todolists'=>$todolists]);
    }

    public function create(){
        return view('todolist.create');
    }

    public function store(Request $request){
        $content = $request -> validate([
            'content' => 'required|min:3' 
        ]);
        Todolist::create([
     
            'content' => $request->content,
            'state' => false
        ]);

        return redirect()->route('root')->with('notuice','新增成功');
    }

    public function edit($id){
        $todolist = Todolist::find($id);
        return view('todolist.edit',['todolist' => $todolist]);
    }

    public function show(Request $request,$id){
        $todolist = Todolist::find($id);
        $state = true;
        
        $todolist -> update( compact('state'));
        return redirect()->route('root')->with('notuice','已完成一件代辦事項');
    }

    public function destroy($id){
        $todolist = Todolist::find($id);
        $todolist->delete();
        return redirect()->route('root')->with('notuice','刪除成功');
    }
}
