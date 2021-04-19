<!DOCTYPE html>
<html lang="fr">
<head>
<?php   session_start();     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KnowledgeQuizz</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<?php   include("nav.php");     ?>
<body>
    <div class="row mt-3" style="width:100%">
        <div class="col-5 border bg-white rounded-5 mx-6 my-4 d-flex flex-column align-items-center">
            <h2 class="my-5 fs-0">Score</h2>
            <p class="mb-5 fs-7">/20</p>

        </div>  
        <div class="col-5 border bg-white rounded-5 mx-6 my-4 d-flex flex-column align-items-center">
            <H2 class="my-5 fs-0 ">Nom du quizz :</H2>
            <p class="mb-5 fs-7">Nom du créateur :</p>

        </div>      
    </div>
</body>
</html>