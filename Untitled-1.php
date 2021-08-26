
<?php
/*
$d = date("D");
switch ($d){
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    case "Sun":
        echo "Today is Sunday";
        break;
    default:
        echo "Wonder which day is this ?";
}

?> 
<br>
<?php 
 $age = '7-12';
 switch($age)
 {
     case '0-1':
        echo "its a baby";
     break ;
     case '2-3': 
        echo 'toddler';
     break;
     case '4-6': 
        echo  'infant';
     break;
     case '7-12': 
        echo 'child';
     break;
     default: 
       echo 'others';
 }*/
?>

<?php /*
  $id = $_GET['id'];
  if(isset($_GET['id']))
  {
      switch ($id){
          case "116753177":
            echo "banned";
            break;
          case "1234566":
            echo "banned";
            break;
         case "189356235":
            echo "banned";
            break;
         default:
            echo "allowed";
            break;
      }
  }
  else {
      echo "NO USERID SET!";
  }
  */
?>

<?php
$i = 1;
if ($i == 0) {
    echo "i equals 0 <br>";
} elseif ($i == 1) {
    echo "i equals 1 <br>";
} elseif ($i == 2) {
    echo "i equals 2";
}

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}
?>

<?php

switch ($i) {
    case "apple":
        echo "i is apple";
        break;
    case "bar":
        echo "i is bar";
        break;
    case "cake":
        echo "i is cake";
        break;
}
?>
<br>
<?php
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;
    case 3:
        echo "i is 3";
}
?>
<br>
<?php
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
}
?>

<?php
$beer = 'B';
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Good choice';
    break;
    default;
        echo 'Please make a new selection...<br>';
    break;
}
?>

<?php
$a = 0;

if(++$a == 3) echo 3;
elseif(++$a == 2) echo 2;
elseif(++$a == 1) echo 1;
else echo "No match!";

// Outputs: 2

$a = 0;

switch(++$a) {
    case 3: echo 3; break;
    case 2: echo 2; break;
    case 11: echo 1; break;
    default: echo "No match!"; break;
}

// Outputs: 1
?>
<?php/*
switch(winNobelPrizeStartingFromBirth()) {
case "peace": echo "You won the Nobel Peace Prize!"; break;
case "physics": echo "You won the Nobel Prize in Physics!"; break;
case "chemistry": echo "You won the Nobel Prize in Chemistry!"; break;
case "medicine": echo "You won the Nobel Prize in Medicine!"; break;
case "literature": echo "You won the Nobel Prize in Literature!"; break;
default: echo "You bought a rusty iron medal from a shady guy who insists it's a Nobel Prize..."; break;
}*/
?>

<?php
$s = time();
for ($i = 0; $i < 1000000000; ++$i) {
  $x = $i%10;
  if ($x == 1) {
    $y = $x * 1;
  } elseif ($x == 2) {
    $y = $x * 2;
  } elseif ($x == 3) {
    $y = $x * 3;
  } elseif ($x == 4) {
    $y = $x * 4;
  } elseif ($x == 5) {
    $y = $x * 5;
  } elseif ($x == 6) {
    $y = $x * 6;
  } elseif ($x == 7) {
    $y = $x * 7;
  } elseif ($x == 8) {
    $y = $x * 8;
  } elseif ($x == 9) {
    $y = $x * 9;
  } else {
    $y = $x * 10;
  }
}
print("if: ".(time() - $s)."sec\n");

$s = time();
for ($i = 0; $i < 1000000000; ++$i) {
  $x = $i%10;
  switch ($x) {
  case 1:
    $y = $x * 1;
    break;
  case 2:
    $y = $x * 2;
    break;
  case 3:
    $y = $x * 3;
    break;
  case 4:
    $y = $x * 4;
    break;
  case 5:
    $y = $x * 5;
    break;
  case 6:
    $y = $x * 6;
    break;
  case 7:
    $y = $x * 7;
    break;
  case 8:
    $y = $x * 8;
    break;
  case 9:
    $y = $x * 9;
    break;
  default:
    $y = $x * 10;
  }
}
print("switch: ".(time() - $s)."sec\n");
?>
