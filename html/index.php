<!DOCTYPE html>
<html lang="fr">
<head>
<?php   session_start();     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<?php   include("nav.php");     ?>
<body>
    <div class="row mt-5" style="width:100%">
        <div class="col-6 border bg-white rounded-5 mx-6 mt-5">
            <H2 class="mx-6 my-6 fs-0">20 questions aléatoires à chaque quizz</H2>
            <p class="my-4 fs-7 mx-6">Jusqu'à 60 questions différentes et la possibilité de créer soi-même ses quizz</p>
            <div class="mx-5 d-flex mb-5">
                <button class="btn btn-outline-danger rounded-5 fs-3 fw-bold ms-5 py-2 px-4">Lancer un quizz</button>
                <button class="btn btn-outline-danger rounded-5 fs-3 fw-bold ms-auto me-5 py-2 px-4">Créer un quizz</button>
            </div>
        </div>  
        <div class="col-5 position-relative">
            <img class="img-fluid position-absolute top-50 start-50 translate-middle" src="../image/Red.png">
        </div>      
    </div>
</body>
</html>