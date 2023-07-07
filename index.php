<?php

// クラス
class Employee {
  private static $company = '技術評論者';
  const PARTTIME = 0x01;  // アルバイト
  const REGULAR = 0x02;   // 正社員
  const CONTRACT = 0x04;  // 契約写真

  private $name;
  private $type;
  public function __construct($name, $type)
  {
    $this->name = $name;
    $this->type = $type;
  }
  public static function getCompany() {
    return self::$company; // Employee::$companyと同義
  }
  public static function work() {
    echo '書類を整理しています', PHP_EOL;
  }

  public static function setCompany($value) {
    self::$company = $value;
  }
}

$yamada = new Employee('山田', Employee::REGULAR);
$yamada->work();
$suzuki = clone $yamada;
$suzuki->work();

print('hello');

// 定数
define('BOOK', 'Perfect PHP');
echo BOOK, PHP_EOL;

$value = 'BOOK';
echo constant($value), PHP_EOL;

// var_dump(get_defined_constants());

// 配列
$fruit = array(
  'apple',
  'banana',
  'orange',
);
echo $fruit[0], PHP_EOL;

$fruits_color = array(
  'apple' => 'red',
  'banana' => 'yellow',
  'orange' => 'orange',
);

echo $fruits_color['banana'], PHP_EOL;
// キーがセットされているか確認
print(array_key_exists('apple', $fruits_color));

// for文
$array = array(1, 2, 3, 4, 5,);
for($i = 0; $i < count($array); ++$i) {
  echo $array[$i], PHP_EOL;
}

// foreach
foreach($fruits_color as $name => $color) {
  echo "$name is $color", PHP_EOL;
};

// 無名関数
// $add = function($v1, $v2) {
//   return $v1 + $v2;
// };
print("123". "\n");
$data = [
  ['gender_id' => '0', 'gender_name' => '男性'],
  ['gender_id' => '1', 'gender_name' => '女性'],
  ['gender_id' => '2', 'gender_name' => 'その他'],
];

$genders = [
  '0' => '男性',
  '1' => '女性',
  '2' => 'その他'
];
// データをセレクトボックスのオプション要素に変換する
$options = '';
// foreach ($data as $row) {
//   $selected = ' selected';
//   if ($row['gender_id'] === $users['gender_id']) {
//     $options .= '<option value="' . $row['gender_id'] . $selected . '">' . $row['gender_name'] . '</option>';
//   } else {
//     $options .= '<option value="' . $row['gender_id'] . '">' . $row['gender_name'] . '</option>';
//   }
// }

// 名簿リストを初期化
$meibo = array();

// 人を名簿に追加
$person = array(
  "name" => "Nami",
  "age" => 18,
);
array_push($meibo, $person);

// 人を名簿に追加
$person = array(
  "name" => "Takeshi",
  "age" => 20,
);
array_push($meibo, $person);

// 人を名簿に追加
$person = array(
  "name" => "Nami",
  "age" => 28,
);
array_push($meibo, $person);

// ランダムに一件の名簿の内容を表示
$r = rand(0, count($meibo) - 1);
$p = $meibo[$r];

echo "name:". $p["name"]. "\n";
echo "age:". $p["age"]. "\n";
?>
