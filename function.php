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

//// $bikes=array("Suzuki","Yamah","Honda");

// $bikes[0]="TVS";
// $bikes[3]="CBR";

// var_dump($bikes) ."<br>";
//// echo($bikes[3])


$info= array(
    "Name"=>"Toufik",
    "ID"=>"01",
    "Religion"=>"Islam",
);
$info ["Email"] ="php@gmail.com";

// var_dump($info);

// echo($info["Name"] ."+". $info["Email"]);

//!=========================== Different Array =========================
//!                                                                 ============

$listName=["1stName"=>"Sajid","2ndName"=>"Rakib","Sakib","Liton"];
$listName[3]="Toufik";
// echo($listName[0]);


//!=========================== Array array_push() method=========================
//!                                                                 ===================


$furits =["Apple","Banana","Cherray"];
// array_push($furits,"Orange","Kiwi","Lemon");
// array_unshift($furits, "Orange","Kiwi","Lemon");

//  array_splice($furits,0,1,"Orange");
//  var_dump($furits[1]);
 
//  $furits2=["Cherry","Orange"];
//  $result  = array_merge($furits,$furits2);
//  var_dump($result);

//!=========================== Array array_splice()  Delete array method=========================
//!                                                                 ===================

$cars = ["Volvo", "BMW", "Toyota"];
array_splice($cars ,1,1);
// var_dump($cars)


//!=========================== Array unset() method=========================
//!                                                                 ===================

$cars2 = ["Volvo", "BMW", "Toyota"];
unset($cars2[1],$cars2[2]);
// var_dump($cars2);

//!=========================== Array array_shift() method=========================
//!                                                                 ===================

$cars3 = ["Volvo", "BMW", "Toyota"];
array_shift($cars3);
// var_dump($cars3);


//!=========================== Array array_pop() method=========================
//!                                                                 ===================

$cars4 = ["Volvo", "BMW", "Toyota"];
array_pop($cars4);
// var_dump($cars4);



//!=========================== Array sort() method=========================
//!                                                                 ===================

$cars5 = ["Volvo", "BMW", "Toyota"];
$numbers1=[2,2,1,3,5,7,3];
sort($cars5);
sort($numbers1);
// var_dump($numbers1);

$age = array("Peter"=>"35", "Ben"=>"37","Guen"=>"77", "Joe"=>"43");
// asort($age);
// print_r($age);

?>



<?php

//!===========================Multidimentional Arrays=========================
//!                                                                 =================

 $cars6 =[
    ["Volvo",22,18],
    ["BMW",34,56],
    array("Saab",232,118),
    array("Land Rover",422,13),

 ];

     echo $cars6[0][0]. " : In Stock : " . $cars6[0][1] . " Sold " . $cars6[0][2]. ".<br>" ;
     echo $cars6[1][0]. " : In Stock : " . $cars6[1][1] . " Sold " . $cars6[1][2]. ".<br>" ;
     echo $cars6[2][0]. " : In Stock : " . $cars6[2][1] . " Sold " . $cars6[2][2]. "<br>" ;
     echo $cars6[3][0]. " : In Stock : " . $cars6[3][1] . " Sold " . $cars6[3][2]. "<br>" ;
  ?>



<?php

//!===========================Multidimentional Arrays=========================
//!                                                                 =================

 $cars6 =[
    ["Volvo",22,18],
    ["BMW",34,56],
    ["Saab",232,118],
    ["Land Rover",422,13]

 ];
  ?>
   <ul>
    <li><?php  echo $cars6[0][0]. " : In Stock : " . $cars6[0][1] . " Sold " . $cars6[0][2]?></li>

     <li><?php   echo $cars6[1][0]. " : In Stock : " . $cars6[1][1] . " Sold " . $cars6[1][2]?></li>

     <li><?php   echo $cars6[2][0]. " : In Stock : " . $cars6[2][1] . " Sold " . $cars6[2][2]?></li>

     <li><?php   echo $cars6[3][0]. " : In Stock : " . $cars6[3][1] . " Sold " . $cars6[3][2]?></li>

   </ul>


</body>
</html>