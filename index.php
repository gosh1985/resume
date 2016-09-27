<?php require_once ('my_array.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1><?php// echo rand(1,20);?></h1>
<div class="image">
    <img src="image/IMG_20140518_170629.jpg" alt="Icon" style="width:600px;height:448px;"/>
    <h5 ><span ><a id="my_name" href="my_data.php">Лучко Игорь</a></span></h5>
    </br>



            <?php foreach ($my_arr as $key=>$val){?>

            <h2><a href="<?php echo $val ?>"><?php echo $key.'</br>';?></a></h2></br>


      <?php  }?>


</div>


