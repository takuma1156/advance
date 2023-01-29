<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KintaiController extends Controller
{
    //リクエストをattendance.viewに返す
    public function index(Request $request){
        $form = $request->all();
        return view('kintai.attendance',['form' => $form]);
    }

    //attendanceテーブルに出勤時間を登録 ※create(save)メソッドは既存レコードの更新を実行する
    public function create(Request $request){
        $attendance = new Attendance;
        $form = $request->only(['attendance_id','date','start_time']);
        unset($form['_token']);
        $attendance->fill($form)->save();//不要?
        return redirect('/');
    }
}
