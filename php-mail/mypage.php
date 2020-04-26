<?php
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告する
ini_set('display_errors','On'); //画面のエラーを表示させるか

session_start();
//ログインしていなければ、ログイン画面へ戻す
if(empty($_SESSION['login'])) header("Location:login.php");

?>

<!DOCTPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>ホームページのタイトル</title>
    <style>
      body{
        margin: 0 auto;
        padding: 150px;
        width: 25%;
        background: #fbfbfa;
      }
      h1{
        color: #545454;
        font-size: 20px;
      }
      a{
        color: #545454;
        display: block;
      }
      a:hover{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <?php if (!empty($_SESSION['login'])){ ?>
      <h1>マイページ</h1>
      <section>
        <p>
        あなたのEmailは info@gmail.com です。<br>
        あなたのPassは password です。
        </p>
        <a href="login.php">ログイン画面へ</a>
      </section>
    <?php }else{ ?>
    <p>ログインしていないと見れません。</p>
    <?php } ?>
  </body>
</html>