<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\Input;




class InputController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function func() {
        // Instancize
        $Input = new Input;
        $value = $Input->find(1);
        $arr = ['Snome1', 'Snome2', 'Snome3'];
        return view('sample', compact('value', 'arr'));
    }
}
