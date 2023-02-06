<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class KintaiController extends Controller
{
    //$dateをkintai.viewに送る
    public function index(Request $request){//アクセスしたタイミングで取得する
        $date = date('Y-m-d');
        $dt = Carbon:: now();
        $times = [ "Today" => $dt,];
        return view('kintai.kintai',['date' =>$date, 'times' => $times]);
    }

    //attendanceテーブルに出勤時間を登録 ※create(save)メソッドは既存レコードの更新を実行する
    public function create(Request $request){
        $attendance = new Attendance;
        $form = $request->all();
        unset($form['_token']);
        $attendance->fill($form)->save();//不要?
        return redirect('/attendance');
    }

}
