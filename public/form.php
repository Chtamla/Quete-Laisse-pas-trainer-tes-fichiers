<?php

$uploadDir = __DIR__ . '/Images/';

if(isset($_GET['remove'])){
    unlink($uploadDir.$_GET['remove']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<a href="index.php">RETOUR AU FORMULAIRE</a>

<div class="row">
    <?php
    foreach(scandir($uploadDir) as $k => $v){
        if($k > 1){?>
            <div class="col-xs-6 col-md-3">

                <a href="index.php?remove=<?php echo $v?>" class="thumbnail">DELETE</a>
                <img src="/Images/<?php echo $v ?>" alt="<?php echo $v ?>" width="auto" height="500">
                <p><?php echo $v ?></p>

            </div>
        <?php }} ?>
</div>


</body>
</html>