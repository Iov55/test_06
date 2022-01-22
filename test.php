<?php
echo "Hello world"."<br>";

  $str = 'abcde';
  echo $str[0]."<br>";
  echo $str[2]."<br>";
  echo $str[4]."<br>";

  $str = 'abcde';
  $str[0] = 'e';
  $str[1] = 'd';
  $str[2] = 'c';
  $str[3] = 'b';
  $str[4] = 'a';
  echo $str."<br>";

  $str = 'abcde';
  $num = 3;
  echo $str[$num]."<br>";

  //Как найти последний символ строки

  $str = 'abcde';
  echo $str[strlen($str) - 1]."<br>"; //выведет е

  //как узнать номер последнего символа

  //$str = 'abcde';
 //$last = strlen($str) - 1."<br>";

  $str = '12345';
  echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4]."<br>";

  $num = 1;
 $num = $num + 1;
 $num = $num + 1;

 echo $num."<br>";

  $num = 47;
  $num += 7;
  $num -= 18;
  $num *= 10;
  $num /= 15;
  echo $num."<br>";

  $str = 'a';
  $str .= 'b';
  $str .= 'c';

  echo $str."<br>";

  $arr = ['a', 'b', 'c'];
  echo $arr[0]."<br>";
  echo $arr[1]."<br>";
  echo $arr[2]."<br>";

  $arr = ['a', 'b', 'c', 'd'];
  echo $arr[0]. '+' .$arr[1]. '+' .$arr[2]. '+' .$arr[3]."<br>";

  $arr = [1, 2, 3];
  echo $arr[0] + $arr[1] + $arr[2]."<br>";

  $arr = [2, 5, 3, 9];
  $result = $arr[0] * $arr[1] + $arr[2] * $arr[3]."<br>";
  echo $result;

  //$arr = [1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 7 => 'вс'];

  $arr = ['a' => 1, 'b' => 2, 'c' => 3];
  $arr['a'] += 3;
  $arr['b'] += 3;
  $arr['c'] += 3;
  var_dump($arr);

  //$arr = [];
  //$arr[] = 1;
  //$arr[] = 2;
  //$arr[] = 3;
  //$arr[] = 4;
  //$arr[] = 5;
  //var_dump($arr)."<br>";

   //$arr[];
   //$arr['year'] = 2022;
   //$arr['month'] = 'Январь';
   //$arr['day'] = 17;
   //var_dump($arr);

  $arr = [1, 2, 3, 4, 5];
  $key1 = 1;
  $key2 = 2;
  echo $arr[$key1] + $arr[$key2]."<br>";

  $arr = ['a' => 1, 'b' => 2, 'c' => 3];
  $key = 'c';
  echo $arr[$key]."<br>";

  //Конструкция if-else в PHP

  $test = 0;

	if ($test >= 10) {
		echo '+';
	} else {
		echo '-'."<br>";
	}

  $test = 0;

  if ($test <= 10) {
    echo '+'."<br>";
  } else {
    echo '-'."<br>";
  }

  $num1 = 2;
  $num2 = 3;

  if ($num1 <= 1 and $num2 >= 3) {
    echo '+'."<br>";
  } else {
    echo '-'."<br>";
  }

  $num = 5;

  if ($num > 0 and $num < 5) {
    echo '+'."<br>";
  } else {
    echo '-'."<br>";
  }

  $num = 5;

  if ($num >= 10 and $num <= 20) {
    echo '+'."<br>";
  } else {
    echo '-'."<br>";
  }

  $num1 = 10;
	$num2 = -5;

	if ($num1 > 0 or $num2 > 0) {
		echo '+'."<br>";
	} else {
		echo '-'."<br>";
	}

  $test = true;

	if ($test) { // эквивалентно if ($test == true)
		echo '+'."<br>";
	} else {
		echo '-'."<br>";
	}

  $test = true;

	if (!$test) { // используем логическое НЕ
		echo '+'."<br>";
	} else {
		echo '-'."<br>";
	}

  //Команда isset Определяет, была ли установлена переменная значением отличным от null

  //Команда empty проверкa переменной на пустоту.

  //$test = 0;
  //if ($test == o) echo 'yes'; else echo 'no'."<br>";

  $num = 12;

  if ($num > 0 and $num <= 10) {
    echo 'Var 1'."<br>";
  }
  if ($num >= 11 and $num <= 20) {
    echo 'Var 2'."<br>";
  }
  if ($num >= 21 and $num <= 31) {
    echo 'Var 3'."<br>";
  }

  $num = 32;

  if ($num > 0 and $num <= 10) {
    echo 'Var 1'."<br>";
  } elseif ($num >= 11 and $num <= 20) {
    echo 'Var 2'."<br>";
  } elseif ($num >= 21 and $num <= 31) {
    echo 'Var 3'."<br>";
  } else { echo 'Error'."<br>";
  }



  //let num = 37;
//if (num < 10 || num > 99) {
      //  alert ('Число меньше 10 или больше 99');
    //} else {
    //    let num2 = num%10;      // 27/10 = остаток 7
    //    let num1 = (num-num2)/10;      //27-7 = 20/10 = 2
    //    let sum = num1+num2;
    //    console.log (sum);
    //    if (sum <= 9) {
    //        alert ('Сумма цифр однозначна');
    //    } else {
    //        alert ('Сумма цифр двузначна');
    //    }
  //  }

  $arr = [5, 8, 2];
  $result = count($arr);
  if ($result == 3) {
    $sum = $arr[0] + $arr[1] + $arr[2]; {
      echo $sum."<br>";
    }
  }

  $a = 6;
  $b = 2;
  $rest = $a % $b;
  if ($rest === 0) {
    echo 'делится нацело'."<br>";
  } else {
    echo 'делится с остатком'."<br>";
  }

  $a = 5;
  if ($a >= 1 and $a <= 3) {
    echo 'зима'."<br>";
  } elseif ($a >= 4 and $a <= 6) {
    echo 'весна'."<br>";
  } elseif ($a >= 7 and $a <= 9) {
    echo 'лето'."<br>";
  } elseif ($a >= 10 and $a <= 12) {
    echo 'осень'."<br>";
  }

  $str = 'abcde';
  if ($str[0] === 'a') {
    echo 'Yes'."<br>";
  }

  $str = '12345';
	if ($str[0] == 1 or $str[0] == 2 or $str[0] == 3)
		echo 'Да'."<br>";
	else
		echo 'Нет'."<br>";

  $str = '793';
  $res = $str[0] + $str[1] + $str[2];
    echo $res."<br>";

  $str = '473982';
  $res1 = $str[0] + $str[1] + $str[2];
  $res2 = $str[3] + $str[4] + $str[5];
  if ($res1 === $res2) {
    echo 'ravno'."<br>";
  } else {
    echo 'ne ravno'."<br>";
  }

  //Конструкция switch-case

  $lang = 'ru';

	switch ($lang) {
		case 'ru':
			echo 'рус'."<br>";
		break;
		case 'en':
			echo 'англ';
		break;
		case 'de':
			echo 'нем';
		break;
		default:
			echo 'язык не поддерживается';
		break;
	}

  //Тернарный оператор

  $num = 4;
  $result = $num >= 0 ? 'true': 'false';
  echo $result;

  //Цикл while

  $i = 10;
  while ($i <= 33) {
    echo $i."<br>";
    $i++;
  }

  $i = 1;
  while ($i <= 99) {
    echo $i."<br>";
    $i += 2;
  }

  $i = 30;
  while ($i >= 0) {
    echo $i."<br>";
    $i--;
  }

  //Цикл for

  for ($i = 11; $i <= 33; $i++) {
    echo $i."<br>";
  }

  //for ($i = 0; $i <= 100; $i += 2)
  //for ($i = 1; $i <= 99; $i += 2)
  //for ($i = 100; $i >= 0; $i--)

  $result = 0;
  for ($i = 1; $i <= 20; $i++) {
    $result = $result + $i;
  }
  echo $result."<br>";

  $result = 0;
  for ($i = 2; $i <= 100; $i += 2) {
    $result = $result + $i;
  }
  echo $result."<br>";

  $result = 0;
  for ($i =1; $i <= 99; $i += 2) {
    $result = $result + $i;
  }
  echo $result."<br>";

  //Цикл foreach

  $arr = ['a', 'b', 'c', 'd', 'e'];
  foreach ($arr as $elem) {
    echo $elem."<br>";
  }

  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  $res = 0;
  foreach ($arr as $elem) {
    $res += $elem;
  }
  echo $res."<br>";

  $arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
  foreach ($arr as $key => $elem) {
    echo $key. '-' .$elem."<br>";
  }

  $arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
  foreach ($arr as $key => $elem) {
    echo $key. '- возраст' .$elem. 'лет.'."<br>";
  }

  $arr = [1, 2, 3, 4, 5];
  foreach ($arr as $elem) {
    if ($elem % 2 != 0) {
      echo $elem."<br>";
    }
  }


  $arr = [2, 5, 9, 15, 1, 4];
  foreach ($arr as $num) {
    if ($num > 3 and $num < 10) {
      echo $num."<br>";
    }
  }

  $arr = [-2, 7, 10, -4, 6, -8, 3, 9,];
  $sum = 0;
  foreach ($arr as $num) {
    if ($num >= 1) {
      $sum = $sum + $num;
    }
  }
  echo $sum;




  ?>
