<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<?php 


?>

<!-- write.phpに送る-->
<body>
    <form action="write.php" method="post">  
        お名前: <input type="text" name="name">様
        年齢: <input type="text" size="7" name="age"> 歳 <br>
        EMAIL: <input type="text" size="38" name="mail"> <br>
        一言: <input type="textbox" size="50" name="words"> <br>
        すきな食べ物: <input type="text" name="ffood"><br>
        好きな色：<input type="color" value="#ccff99"  name="fcolor">
        今の気持ち：BAD <input type="range" step="5" min="0" max="100"  name="feel"> GOOD<br> 
        </label>

        <br>
        PASSWORD: <input type="password" name="pass">
        <input type="submit" value="送信">
        <input type="reset" value="リセットする">
    </form>
</body>

</html>
