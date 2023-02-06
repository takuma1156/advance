
<h1>勤怠表示ページ</h1>

  <h3>{{$date}}</h3>

<table>
  <th>日付</th><th>勤務開始</th><th>勤務終了</th><th>休憩時間</th><th>勤務時間</th>
  @foreach ($forms as $form)
    <tr>
      <td>{{$form->date}}</td>
      <td>{{$form->start_time}}</td>
      <td>{{$form->end_time}}</td>
      <td>{{$form->rest_time}}</td>
      <td>{{$form->total_time}}</td>
    </tr>
  @endforeach
</table>