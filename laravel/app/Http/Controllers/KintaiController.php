<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class KintaiController extends Controller
{
    //$dateをkintai.viewに送る
    public function index(Request $request){//アクセスしたタイミングで取得する
        $user = Auth::user(); 
        return view('kintai.kintai',['user' => $user]);
    }

    //attendanceテーブルに出勤時間を登録 ※create(save)メソッドは既存レコードの更新を実行する
    public function attendance_start(Request $request){
        $attendance = new Attendance;
        $form = $request->only(user);//idとdateとstart_timeをformに入れつ
        $date = date('Y-m-d');
        $dt = Carbon:: now();
        $times = [ "Today" => $dt,];
        unset($form['_token']);
        $attendance->fill($form)->save();//更新！
        return redirect('/attendance');
    }
    public function attendance_end(Request $request){
        $attendance = new Attendance;
        $form = $request->all();
        unset($form['_token']);
        $attendance->fill($form)->save();
        return redirect('/attendance');
    }
}
