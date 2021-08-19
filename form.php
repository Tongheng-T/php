<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form action="/action_page.php">
  <label for="code">code:</label><br>
  <input type="text" id="code" name="code" value="001"><br>
  <label for="name_item">Last name:</label><br>
  <input type="text" id="name_item" name="name_item" value="itemo1"><br><br>

  <label for="qty">code:</label><br>
  <input type="text" id="qty" name="qty" value="1"><br><br>
  <label for="price"> price:</label><br>
  <input type="number" id="price" name="price" value="1"><br><br>

  <input type="submit" value="Submit">
</form> 

<?php
$overtime = 60 ;
if ($overtime<=50)
{
  $pay_amt=1200;
  $medical=1000;
  echo "Pay Amount : $pay_amt : Medical : $medical";
}
else
{
  $pay_amt=2000;
  $medical=1500;
  echo "pay Amount : $pay_amt : Medical : $medical";
}
?>

<br>
<?php
$x = 6;
$y = 5;
if ($x > $y) 
{
echo "x is bigger than y"; 
}
elseif ($x == $y)
{
echo "x is equal to y";
} 
else
{
echo "x is smaller than y";
}
?>
<br>


<?php

$pri=70;
$dis =0;
if ($pri >=1 && $pri <=10 ){
  $dis=10/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}elseif($pri >=10 && $pri <=20){
  $dis=20/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}elseif($pri >=20 && $pri <=30){
  $dis=30/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}elseif($pri >=30 && $pri <=40){
  $dis=40/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}elseif($pri >=40 && $pri <=50){
  $dis=50/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}elseif($pri >=50 && $pri <=60){
  $dis=60/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}else {
  $dis=70/100;
  $price_after_discount =$pri *$dis;
  $final_price = $pri-$price_after_discount;
  echo $final_price;
}
?>
<br>
<?php
$score1 = 59;
$score2 = 60;
$score3 = 80;
$score4 = 50;
$score5 = 100;
$total = $score1+$score2+$score3+$score4+$score5;
$average = $total/5;
if ($average >= 90 && $average <=100){
   $Grade = "A";
}elseif($average >= 80 && $average <=90){
  $Grade = "B";
}elseif($average >= 70 && $average <=80){
  $Grade = "C";
}elseif($average >=60 && $average <=70){
  $Grade = "D";
}elseif($average >= 50 && $average <=60){
  $Grade = "E";
}else {
  $Grade ="F";
}
echo "---------------<br>";
echo "score1: ". $score1."<br> score2: ". $score2."<br> score3: ". $score3."<br> score4: "
. $score4."<br> score5: ". $score5."<br>========"."<br>  Total : ".$total;
echo "<br>Average: ".$average."<br>Grade: ".$Grade;
?>

</body>
</html>