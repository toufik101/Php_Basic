<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Function
    // Array
    // Loop

    //// function my_Fun(){
    //     echo("<h1>Hello, Php</h1>");
    // }
    //// echo(my_Fun())


// !=========================Method 2===========

    // function fun2($x,$y){
    //     echo($x.",".$y);
    // }

    // echo(fun2("Tonny",7))

// !=========================Method 2.1===========

    function fun2($x,$y){

        echo($x+$y);
    }

    echo(fun2(8,7))."</br>";
    echo(fun2(8,10))."</br>";
    echo(fun2(10,7))


    ?>



<!--//=================================
=================== Part 2 H1 Print  ===========//-->

<?php

    function fun_3(){ 
    $x="This";  

?>

    <h1><?php echo($x)?> Is Me</h1>

<?php
  }
    echo(fun_3())
?>



<!--//=====================================
=================== {Part 3 H1 Array}  ===========//-->

<?php

//! $bikes=array("Suzuki","Yamah","Honda");

// $bikes[0]="TVS";
// $bikes[3]="CBR";

// var_dump($bikes) ."<br>";
//! echo($bikes[3])


$info= array(
    "Name"=>"Toufik",
    "ID"=>"01",
    "Religion"=>"Islam",
);
$info ["Email"] ="php@gmail.com";

var_dump($info);

echo($info["Name"] ."+". $info["Email"])
?>



</body>
</html>