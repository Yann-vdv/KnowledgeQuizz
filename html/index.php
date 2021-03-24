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
    <H2 class="mx-6 my-6 fs-0">20 questions aléatoires à chaque quizz</H2>
        <div class="row">
            <div class="mx-5 col-6 d-flex justify-content-center">
                <p class="my-4 ms-5 fs-7">Jusqu'à 60 questions différentes et la possiblité de créer soi-même ses quizzs</p>
                <button class="boutton1 fs-3 fw-bold btn-outline-danger rounded-pill position-absolute translate-middle">Lancer un quizz</button>
                <button class="boutton2 fs-3 fw-bold btn-outline-danger rounded-pill position-absolute translate-middle">Créer un quizz</button>
               
            </div>
            <div class="col-5 position-relative">
                <img class="rounded mx-auto d-block" src="unknown.png">
            </div>
        </div>
</body>
</html>