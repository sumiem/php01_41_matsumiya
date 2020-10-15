<!-- wirteを読み込む -->


<!-- htmlを記述していく -->

<!DOCTYPE html>
<html lang="ja">
<!-- php -->

<!-- ヘッダー（表示なし） -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kekka</title>
</head>

<!-- BODY -->
<body>
回答の内容
<table border="1">
    <tr>
    <th>投稿時間</th>
    <th>名前</th>
    <th>年齢</th>
    <th>EMAIL</th>
    </tr>

    <?php

    $openFile = fopen('./data/data.txt','r'); 
    while ($data = fgets($openFile)){  //１行分を変数格納
        $sdata = explode(",", $data);
        echo '<tr>';
        echo '<td>'. $sdata[0].'</td>';
        echo '<td>'. $sdata[1].'</td>';
        echo '<td>'. $sdata[2].'</td>';
        echo '<td>'. $sdata[3].'</td>';
        echo '</tr>';
        echo '<br>';
    }
    // ファイルを閉じる
fclose($openFile);
    ?>
            <?php
        
            ?>
    </table>

    <ul>
        <li><a href="input.php">回答する</a></li>
    </ul>
</body>

</html>