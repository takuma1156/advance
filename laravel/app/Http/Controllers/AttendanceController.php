<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    //リクエストを表示させる
    public function index(Request $request){
        $date = date("Y-m-d");
        $forms = Attendance::all();
        return view('kintai.attendance',['forms' => $forms,'date'=>$date]);
    }
}
