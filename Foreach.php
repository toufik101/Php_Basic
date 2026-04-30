<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$infos= ["Name"=>"MD-Toufik","ID"=> 01, "Religion"=>"Islam"];

?>

<!-- <ul>

<?php 
foreach($infos as $key=>$info): 
$active= ($key=="ID" ? "active" : "" )
?>

<li class="<?php echo($active) ?>"> <?php echo($info)?> </li>

<?php endforeach;?>
</ul> -->



<!-- ==============================2nd Method================= -->


<ul>

<?php 
foreach($infos as $key=>$info){
    $active= ($key=="ID" ? "active" : "" )
?>

<li class="<?php echo($active) ?>"> <?php echo($key)?> : <?php echo($info)?>  </li>

<?php } ?>
</ul>



</body>
</html>