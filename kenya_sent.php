<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Hello! Kenya!</title>
 <link rel="stylesheet" href="Kenya_stylesheet.css">
</head>

<body>
  <div class = "header">
    <div class = "header-left">株式会社Kenya</div>
    <div class = "header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
  </div>
  <div class = "main">
    <div class = "answer-title">お問い合わせありがとうございます。</br>お問い合わせを承りました。
    </div>
    <div class = "name-answer">◆お名前</div>
      <?php
        echo $_POST ['name'];
      ?>
    <div class = "email-answer">◆メールアドレス</div>
      <?php
        echo $_POST ['email'];
      ?>
    <div class = "content-answer">◆ご質問内容</div>
      <?php
        echo $_POST ['content'];
      ?>
  </div>
  <div class = "footer"></div>
</body>
</html>
