<html>
  <head> 
   <title>HTML Forms Input and Display in PHP</title>
  </head>
  <body> 
    <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: arial;
        font-size:25px;
      };
 
    </style>

<div id="center">
    <h2>  Forms Input  </h2>

<form method="post">

   <p>ID: <input type="number" name="id" value="00" autofocus ></p>

    <p> Name: <input type="text" name="name" value="" autofocus ></p>

   <p>Male: <input type="radio" name="sex" value="Male" checked= "checked">
   
   Female: <input type="radio" name="sex" value="Female" checked= "checked"></p>

   <p>Salary: <input type="text" name="salary" value=""></p>

   <input type="submit" name="submit" value="Submit" />

   &nbsp;&nbsp;&nbsp;

   <input type="submit" name="clear" value="Clear" />

</form>
<?php
    $display="";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $salary = $_POST['salary'];

    if(isset($_POST['submit'])){
        $display .= "id: ".($id) ."<br>";
        $display .= "name: ".($name) ."<br>";
        $display .= "sex: ".($sex) ."<br>";
        $display .= "salary: ".($salary) ."<br>"; 

        if($sex=="Female"  && $salary >= 100){
            $dis = 20/100;
           
           
        }elseif($sex=="Male" && $salary >= 100)  {
          $dis = 15/100; 
        }else {
          $dis = 10/100;
        }
        $bonus = $salary*$dis;
        $pay = "<br> Total: ".$salary+$bonus;
        echo $display;
        echo "bonus: ".$bonus;
        echo $pay;
    }
    if (isset($_POST['clear'])) {

        $firstname ="";
     
        $middlename ="";
     
        $lastname ="";
     
        $display ="";
     
        } 
     
   ?> 
</div>
 </body>

 </html>
