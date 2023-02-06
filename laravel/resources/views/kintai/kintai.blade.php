
<h1>勤怠入力ページ</h1>
@foreach($times as $key => $time)
  <h3>{{$date}}</h3>
  <h4>{{$time}}</h4>
@endforeach
<form action="/" method="post">
  @csrf
  <table>
    <input type="hidden" name="user_id" value="1">
    <input type="hidden" name="date" value="$date">
    <input type="hidden" name="start_time" value="$times">
    <tr><th></th><td><input type="submit" value="勤務開始"></td></tr>
  </table>
</form>