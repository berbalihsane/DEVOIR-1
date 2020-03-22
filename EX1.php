<?php
    $tableau = array(1,2,3,4,5,6);
    shuffle($tableau);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit et Legumes</title>
</head>
<body style="padding-top:10%;padding-left:30%;padding-right:10%;">
    <div>
        <img  style="width:150px;height:150px;" src="<?php echo $tab[0].".png"?>" alt="">
        <img  style="width:150px;height:150px;" src="<?php echo $tab[3].".png"?>" alt="">
        <img  style="width:150px;height:150px;" src="<?php echo $tab[5].".png"?>" alt="">
    </div>
</body>
</html>