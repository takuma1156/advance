<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KintaiController extends Controller
{
    public function index(Request $request){
        $form = $request->all();
        return view('Kintai.attendance',['form' => $form]);
    }
}
