<?php
if(!empty($_FILES))
{
    $file_name = $_FILES['fichier']['name'];
    $file_size = $_FILES['fichier']['size'];
    $file_extension = strrchr($file_name, ".");

    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $file_dest = 'Images/' .$file_name;

    $extensions_autorisees = array('.jpg', '.png', '.gif');

    /*vérification "in array = lecture dans tableau" si dans le tableau $extensions_autorisees ce trouve l'extension dans $file_extension*/
    if(in_array($file_extension, $extensions_autorisees)) {
        if(move_uploaded_file($file_tmp_name, $file_dest)) {
            echo 'Fichier envoyé avec succés';
        } else {
            echo "Une erreur est survenue lors de l'envoi du fichier";
        }
    } else {
        echo 'Seuls les fichiers JPG, PNG et GIF sont autorisées';
    }

    if($file_size < 1000000) {

    } else {
        echo 'le fichier est trop volumineux';
    }

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

<a href="form.php">VOIR LES PICTURES</a>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier" multiple="multiple" />
    <input type="submit" name="submit" value="Send" />
</form>
<?php if(isset($error)) echo $error;?>


</body>
</html>