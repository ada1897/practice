
<!DOCTYPE html>
<h1 lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPのサンプル</title>
</head>
<body>
  <?php
    //commentがPOSTされているなら
    if(isset($_POST["comment"])){
      //エスケープしてから表示
      $comment = htmlspecialchars($_POST["comment"]);
      $title = htmlspecialchars($_POST["title"]);
      $message = htmlspecialchars($_POST["message"]);
      print("タイトルは「 ${title} 」です。");
      print("あなたのコメントは「 ${comment} 」です。");
      print("${message}");
    } else {
  ?>
      <p>コメントしてください。</p>
      <form method="POST" action="index.php">
        <input name="title" />
        <input name="comment" />
        <textarea name="message" cols="30" rows="10"></textarea>
        <input type="submit" value="送信" />
      </form>
  <?php
    }
  ?>
</body>
</h1>