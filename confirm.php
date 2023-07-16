<?php
$paragraph = $_POST['paragraph']; // Recuperare da un Form con il metodo GET i valori inseriti
$censor = $_POST['censor'];    // Recuperare da un Form con il metodo GET i valori inseriti
$paragraph_censor = '';

$paragraph_censor = str_replace($censor, '***', trim($paragraph));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Monica Izzo">
    <title>php Badwords | Pagina di ritorno</title>

    <!-- icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/faicon.png">
    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto ">
        <!-- PARAGRAFO ORIGINALE -->
        <div>
            <h3 class="text-center p-5">
                <?php echo $paragraph ?> </h3>
        </div>
        <!--PARAGRAFO CENSURATO-->
        <div>
            <h3 class="text-center p-5">
                <?php echo $paragraph_censor ?> </h3>
            <h5>Lunghezza della stinga <b><?php echo strlen($paragraph) ?></b></h5>
        </div>
    </div>
    </div>
    </div>
</body>

</html>