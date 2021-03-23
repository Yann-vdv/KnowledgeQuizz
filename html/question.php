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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="test.js"></script>

</head>
<?php   include("nav.php");     ?>
<body>
<H2 class="ms-5 my-5">Nom du Quizz</H2>
<div class="row">
    <div class="mx-5 col-7 d-flex justify-content-center">
        <div class="bg-white border rounded-5 d-flex align-items-center flex-column shadow py-5 px-7">
            <h2 class="mb-0">Question 1/20</h2>
            <p class="fs-4 my-3">A quel pays appartien ce drapeau ?</p>
            <img class="border rounded-3" src="https://www.gouv.bj/upload/images/benin/0491859001545163796.png" alt="">
        </div>
    </div>
    <div class="col-3 position-relative">
        <div class="d-flex flex-column">
            <button id="btn1" onclick="response(id)" class="btn-r btn btn-light mb-2 mt-4 fs-5 fw-bold shadow">Russie</button>
            <button id="btn2" onclick="response(id)" class="btn-r btn btn-light my-2 fs-5 fw-bold shadow">France</button>
            <button id="btn3" onclick="response(id)" class="btn-r btn btn-light my-2 fs-5 fw-bold shadow">Bénin</button>
            <button id="btn4" onclick="response(id)" class="btn-r btn btn-light my-2 fs-5 fw-bold shadow">Ouzbékistan</button>
        </div>
        <button class="btn btn-outline-danger fs-5 fw-bold position-absolute bottom-0 start-50 translate-middle shadow">Suivant</button>
    </div>
</div>
    
</body>
</html>