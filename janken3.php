<DOCTYPE html PUBLC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" contents="text/html; charset=UTF-8"/>

<title>php学習</title>
</head>

<body>
// $player
// $rival
// $win
// $lose

$myPlayer = intval($player);
$tekiRival = intval($rival);

$win = 0;//勝ち負けは、0から加算する
$lose = 0;


 for($i = 0,$j = 0;$i <  count($myPlayer),$j < count($tekiRival);
 $i++,$j++){ //配列の数だけループ処理
    if(($myPlayer[$i] == 0)&&($tekiRival[$j] == 2)){ //変数[]で、配列の順番に基づく要素を指定。条件分岐で勝敗を加算する。
   $win++;}
    else if(($myPlayer[$i] == 2)&&($tekiRival[$j] == 5)){
   $win++;}
    else if(($myPlayer[$i] == 5)&&($tekiRival[$j] == 0)){
   $win++;}
    else if(($myPlayer[$i] == 0)&&($tekiRival[$j] == 5)){
   $lose++;}
    else if(($myPlayer[$i] == 2)&&($tekiRival[$j] == 0)){
   $lose++;}
    else if(($myPlayer[$i] == 5)&&($tekiRival[$j] == 2)){
   $lose++;}
 }
  print($win.'勝'.$lose.'敗');//変数と文字列の結合
</body>

</html>