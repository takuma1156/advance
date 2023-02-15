
<h1>勤怠入力ページ</h1>
@foreach($times as $key => $time)
  <h3>{{$date}}</h3>
  <h4>{{$time}}</h4>
@endforeach

<p>{{$user->name}}さんお疲れさまです。</p>

<form action="/attendance_start" method="post">
  @csrf
  <table>
    <input type="hidden" value="{{$user->id}}"name="user_id">
    <tr><th></th><td><input type="submit" value="勤務開始"></td></tr>
  </table>
</form>
<form action="/attendance_end" method="post">
  @csrf
  <table>
    <input type="hidden" value="{{$user->id}}">
    <tr><th></th><td><input type="submit" value="勤務開始"></td></tr>
  </table>

</form>