<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//!================================================
//! ================================For Loop==========

for($x=0; $x<=10; $x+=2){
    echo($x)."<br>";
}


?>



<?php

//!=====================================================
//! ================================ //-While loop-//==========
$y= 0;
while($y<10){
    echo($y) .'<br>';
    $y++;
}

?>



<?php

//!=====================================================
//! ================================ //-For Each-//===========


$infos= ["Name"=>"MD-Toufik","ID"=> 01, "Religion"=>"Islam"];

foreach($infos as$key=>$info){
    echo($key. ": ". $info .". ");
}


?>



</body>
</html>