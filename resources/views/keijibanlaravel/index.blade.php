<html>
  </head>

  <body>
    <h1>１人掲示板</h1>
    @isset($msg)
    <p>{{$name}}</p>
  gi  <p>{{$msg}}</p>
    @else
    <p>１回だけ投稿できます。変更済み</p>
    @endisset
    <form method="POST" action="/keijibanlaravel">
      {{csrf_field() }}


      <p>
        <label for ="namae">Name<br></label>
        <input type="text" name="name" id="namae" placeholder="ニックネームを入力">
      </p>
      <p>
        <label for ="message">Message<br></label>
        <input type="text" name="msg" id="message" placeholder="メッセージを入力">
      </p>
      <input type="submit" value="送信する">
    </form>
    
  </body>
</html>
