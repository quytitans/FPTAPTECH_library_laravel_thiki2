<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function getAll(){
        $books = books::all();
        return view('allBook',['books'=>$books]);
    }

    public function searchByName(Request $request){
        $name = $request->get('name');
        $books = books::where('title','=',$name)->get();
        return view('allBook',['books'=>$books]);
    }
}
