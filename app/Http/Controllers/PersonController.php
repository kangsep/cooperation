<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {

    }

    //Method untuk memanggil Form
    public  function create() {
        return view('people.create');
    }
    
    //Method untuk mengambil inputan form
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',

        ]);

        $name = $request->name;

        return view('people.show', compact('name'));
    }
}
