<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php 
    // ビンゴマシン
    session_start();

    // 何ターン目からを得る
    $turn = empty($_GET["turn"]) ? 0 : intval($_GET["turn"]);
    // 0ターン目なら初期化する
    if ($turn == 0 || empty($_SESSION["numbers"])) {
      // 1-75までの配列を作る
      $nombers = array();
      for ($i = 1; $i <= 75; $i++) {
        $numbers[$i] = $i;
      }
      // シャッフルする
      shuffle($numbers);
      // セッションに保存
      $_SESSION["numbers"] = $numbers;
    }
    // セッションから番号データを取り出す
    $numbers = $_SESSION["numbers"];
    $num = $numbers[$turn];
    $now_turn = $turn + 1;
    $next = ($turn + 1) % 75;

    $next_url = "bingo.php?turn={$next}";
  ?>
</head>
<body>
  <p><?php print($now_turn); ?>ターン目</p>
  <h1><?php print($num); ?></h1>
  <p><a href=<?php print($next_url); ?>>次の番号</a></p>
</body>
</html>