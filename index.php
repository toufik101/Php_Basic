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
    $weather=52;
    $x = $weather>=20 && $weather<30?"Weather Is hot":($weather>=30 && $weather<40 ?"Weather Is So hot": ($weather>41 && $weather<50 ?"Deat Weather": ($weather>51 ?"ABSLUTE MORUVUMI" : "Weather is Cool")));
    // $x = $weather>= 20 && $weather < 30 ?"Weather is hot":($weather >= 30 && $weather < 40 ? "Weather is so hot" :($weather >= 40 && $weather <= 50 ? "Dead Weather" :($weather > 50 ? "ABSOLUTE MOROVUMI" : "Weather is cool")));
    echo($x);
        ?>
</body>
</html>