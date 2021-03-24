<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Inscription</title>
</head>
<body>
<?php include("nav.php");?>
<div class="row my-5" style="width:100%">
        <div class="col-1"></div>
        <div class="col-5 bg-white border rounded-5 shadow py-5 px-7">
            <div class="d-flex flex-column mx-7">
                <H2 class="my-3">Inscription</H2>
                <form class="d-flex flex-column" action="" method="post">
                    <input class="my-3 fs-5" type="email" placeholder="Email" required></input>
                    <input class="my-3 fs-5" type="text" placeholder="Nom" required></input>
                    <input class="my-3 fs-5" type="text" placeholder="Prenom" required></input>
                    <input class="my-3 fs-5" type="password" placeholder="Mot de passe" required></input>
                    <input type="submit" class="my-3 btn btn-outline-danger fs-5 fw-bold" value="S'inscrire"></input>
                    <div class="d-flex my-3"><p class="mb-0 me-1">Vous avez un compte ?</p><a class="text-decoration-none" href="login.php">Se Connecter</a></div>
                </form>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-4 position-relative">
            <img src="../image/red.png" class="img-fluid position-absolute top-50 start-50 translate-middle" alt="">
        </div>
        <div class="col-1"></div>
    </div>
    
</body>
</html>