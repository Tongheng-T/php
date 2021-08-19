<?php


 // Updated from HKimhab
 // hihihih

 // git push (Update last in local to cloud) // update local to update cloud 
 // git pull (Update and/or edite in Cloud not local)  // update cloud to update local 



?>

<?php


echo "<center>Hello PHP </center>";
echo "<p><font color=blue>One lin simple string in blue color </font></p>";
echo "<p><font color=#ff65>One lin simple string in blue color </font></p>";
echo "<p><font color=#04aa6d>One lin simple string in blue color </font></p>";

$a=1000;
$b=1200;
$c=1400;
echo "<p> <fomt color=blue size='4pt'> Salary of Mr.A is:</fomt> <font color=red size='4pt'>$a$</font></p>";
echo "<p> <fomt color=blue size='4pt'> Salary of Mr.b is:"."</fomt> <font color=red size='4pt'>$b$</font></p>";
echo "<p> <fomt color=blue size='4pt'> Salary of Mr.c is:"."</fomt> <font color=red size='4pt'>$c$</font></p>";

echo "<table border=1 cellspacing=0 cellpading=0> Monthly Salary Statement</table>";

echo "<table border=1 cellspacing=0 cellpading=0>
<tr> 
<td>
<font color=blue> Salary of Mr. A is</font> 
</td>
<td>$a$</td>
</tr>

<tr> <td><font color=blue> Salary of Mr. b is</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue> Salary of Mr. c is</td> <td>$c$</font></td></tr>
</table>";

echo "<ul align='left'> <font color=red size='4pt'> 
Salary statement for the Current month</font> 
<li> <font color=blue> Salary of Mr.A is :$a$ </font></li>
<li> <font color=blue> Salary of Mr.b is :$b$ </font></li>
<li> <font color=blue> Salary of Mr.c is :$c$ </font></li>

</ul> ";


echo "<h1> Salary of Mr.A is : $a$ </h1>";
echo "<h1> Salary of Mr.B is : $b$ </h1>";
echo "<h1> Salary of Mr.C is : $c$ </h1>";

if ($a>$b){
    echo "A is Max!". $a;
}else {
    echo "B is Max! $b";
   
}
echo "<br>";

$overtime=60;
if($overtime<=50)
{
    $pay_amt=1200;
    $medical=1000;
    echo "Pay Amount : $pay_amt : Medical : $medical";
}
else 
{
    $pay_amt=2000;
    $medical=1500;
    echo "Pay Amount : $pay_amt : Medical : $medical";
}

echo "<hr>";

$score=89;
if($score>=85 && $score<=100)
   echo "Excellence...!";
else if($score>=70 && $score<85)
   echo "Very Good...!";
else if($score>=50 && $score<70)
   echo "Fairy...!";
else 
   echo "Fail...!";

#==========================
echo "<br>";

$day='Friday';
if($day=='Monday')
{
    echo "<h1> Laugh on $day, laugh for danger. </h1><br>";
}elseif
($day=='Tuesday')
{
    echo "<h1>Laugh on $day, kiss a stranger.</h1><br>";
}elseif
($day=='wednesday')
{
    echo "<h1>Laugh on $day, laugh for a letter.</h1><br>";
}elseif
($day=='Thursday')
{
    echo "<h1>Laugh on $day, something better.</h1><br>";
}elseif
($day=='Friday')
{
    echo "<h1>Laugh on $day, laugh for sorrow.</h1><br>";
}elseif
($day=='Saturday')
{
    echo "<h1>Laugh on $day, joy tomorrow.</h1><br>";
}else
{
    echo "<h1>No information is available for this day.</h1><br>";
}


?>

<?php 

$i = 10;

    if ($i == 10)
    {
        if ($i < 15)
        echo "i is smaller than 15 ";

        if ($i < 12)
            echo "i is smaller than 12 too";
        else 
            echo "i is greater than 15";
    }
?>  

<?php
$x = 10;
$y = '10';
//echo var_dump($x);
echo "<br>";
if($x == $y){

    echo "True";
}else{
    echo"False";
}

echo "<br>";

echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";
if ($x === $y){
    echo "True";
}else{
    echo"False";
}
//echo $x+$y;
?>

<?php 
$diceNumber = 4;
if ($diceNumber == 1){
    echo "The dice number is 1";
}else if ($diceNumber % 2 == 0) {
    if ($diceNumber == 2){
        echo "The dice number is 2";
    }elseif ($diceNumber == 4) {
        echo "The dice number is 4";
    }elseif ($diceNumber == 6) {
        echo "The dice number is 6";
    }else {
        echo "The number has to be between 1 and 6";
    }
} elseif ($diceNumber == 3) {
    echo "The dice number is 3";
}elseif ($diceNumber == 5) {
    echo "The dice number is 5";
}else {
    echo "The number has to be between 1 and 6";
}
echo "<br>";

?>



<?php 
$name= 'sa';
$pass='123';
$cpass='123';
$utype= 'admin';
 if (strcmp($name,'sa')==0)
     if(strcmp($pass,'123')==0)
      if(strcmp($cpass,'123')==0)
       if(strcmp($utype,'admin')==0)
         echo "Welcome to log in";
           else 
              echo "Invalid User Type!";
        else 
          echo "Invalid Confirm Password";
      else 
        echo "Invalid Password";
else 
  echo "Invalid User Name";
 

?>

<?php 


?>
​
