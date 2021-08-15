<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\Detail;

class DetailController extends Controller
{
    public function detail()
    {
        return view('detail');
    }

    public function send(Request $request) {
        $output = $request->userCompany;
        return view('detail', compact('output'));
    }
}
