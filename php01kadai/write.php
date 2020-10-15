<?php
// ファイルに書き込み $strという変数の中に入れる
date_default_timezone_set('Asia/Tokyo');

$name = $_POST['name']; //nameをうけとる
$mail = $_POST['mail']; //受け取って変数として設定
$age = $_POST['age'];
$words = $_POST['words'];
$ffood = $_POST['ffood'];
$fcolor = $_POST['fcolor'];
$feel = $_POST['feel'];
// 表示用の変数定義
$time = date("m-d H:i");
$str = $time .','. $name .',' . $age .','. $mail;

//文字作成(開いて、書いて、閉じる)
$file = fopen('./data/data.txt','a');
fwrite($file, $str ."\n");  
fclose($file);
?>
<!-- 開くと任意の文字列を表示にする -->

<!DOCTYPE html>
<html lang="ja">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしましたよ！</h1>
    <p> 内容 <?= $str ?> </p>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="input.php">戻る</a></li>
        <li><a href="read.php">集計を見る</a></li>
    </ul>
</body>

</html>
