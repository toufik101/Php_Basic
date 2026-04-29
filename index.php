<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $F= "tata";
    $f="Bata";
    $arra=["Tata","Bata","Bay","Apex","Lotto"];
    $weather=40;
    $x = $weather>=20 && $weather<30?"Weather Is hot":($weather>=30 && $weather<40 ?"Weather Is So hot": ($weather>41 && $weather<50 ?"Deat Weather": ($weather>51 ?"ABSLUTE MORUVUMI" : "Weather is Cool")));
    // $x = $weather>= 20 && $weather < 30 ?"Weather is hot":($weather >= 30 && $weather < 40 ? "Weather is so hot" :($weather >= 40 && $weather <= 50 ? "Dead Weather" :($weather > 50 ? "ABSOLUTE MOROVUMI" : "Weather is cool")));
    echo($x);
        ?>

        <!-- Prin H1 -->
        <?php if($weather==44):?>
            <h2>Weather Is 42 DegC</h2>
        <?php elseif($weather==45): ?>
            <h2>45 Deg C</h2>

            <?php else:?>
            <h3>Not Match</h3>
        <?php endif;?>


<!-- ======================================== 
 ===========================================-->
        <!-- Print H1 Method 2  -->
         <?php if($weather==42) { ?>
            <h1>Weather Is 42 Deg C</h1>

            <?php } elseif($weather==43){?>
            <h2>Weather Is 43 Deg C</h2>

         <?php } else{?>
            <strong>Nothing</strong>
         <?php } ?>

</body>
</html>