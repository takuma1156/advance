
<h1>勤怠入力ページ</h1>

<form action="/" method="post">
  @csrf
  <table>
    <tr><th>date:</th><td>{{date('Y年m月n日')}}</td></tr>
    <tr><th></th><td><input type="submit" value="勤務開始"></td></tr>
  </table>
  