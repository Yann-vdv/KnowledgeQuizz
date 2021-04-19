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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/QuizzCreate.js"></script>
</head>
<body>
    <?php   include("nav.php");     ?>
    <h2 class="d-flex justify-content-center mt-5">Création de quizz</h2>
    <form class="my-5 mx-7 bg-white border rounded-5 shadow" action="" method="post">
        <div class="row my-4 mx-0">
            <div class="col-8">
                <h3 class="ms-5">Nom du quizz</h3>
                <input type="text" class="ms-5 my-3" style="width:50%;" required>
            </div>
            <div class="col-4">
                <div class="d-flex">
                    <input type="checkbox" name="" id="" class="col-1 align-self-center" onclick="nbQstart()">
                    <p class="ms-3" style="margin-top:16px;">questions aléatoires</p>
                </div>
                <div class="d-none" id="nbQ">
                    <input type="number" name="" id="nbQuestion" min="1" max="2" step="1" value="2" class="align-self-center" style="width:50px;">
                    <p class="ms-3" style="margin-top:16px;">nombres de questions du quizz</p>
                </div>
            </div>
        </div>
        <div class="ms-5 p-0" id="questions">
            <h3>Question 1</h3>
            <input type="text" name="question1" class="mt-3" style="width:50%;">
            <div class="row d-flex my-4 mx-0">
                <input type="checkbox" name="Bresponse1_1" value="CBresponse" id="Bresponse1_1" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 1</h3><input type="text" name="response1_1" placeholder="première réponse" style="width:100%;"></div>
                <input type="checkbox" name="Bresponse1_2" value="CBresponse" id="Bresponse1_2" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 2</h3><input type="text" name="response1_2" placeholder="deuxième réponse" style="width:100%;"></div>
            </div>
            <div class="row d-flex my-4 mx-0">
                <input type="checkbox" name="Bresponse1_3" value="CBresponse" id="Bresponse1_3" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 3</h3><input type="text" name="response1_3" placeholder="troisième réponse" style="width:100%;"></div>
                <input type="checkbox" name="Bresponse1_4" value="CBresponse" id="Bresponse1_4" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 4</h3><input type="text" name="response1_4" placeholder="quatrième réponse" style="width:100%;"></div>
            </div>
            <p>Veuillez cocher la bonne réponse</p>
            <h3>Question 2</h3>
            <input type="text" name="question2" class="mt-3" style="width:50%;">
            <div class="row d-flex my-4 mx-0">
                <input type="checkbox" name="Bresponse2_1" value="CBresponse" id="Bresponse2_1" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 1</h3><input type="text" name="response2_1" placeholder="première réponse" style="width:100%;"></div>
                <input type="checkbox" name="Bresponse2_2" value="CBresponse" id="Bresponse2_2" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 2</h3><input type="text" name="response2_2" placeholder="deuxième réponse" style="width:100%;"></div>
            </div>
            <div class="row d-flex my-4 mx-0">
                <input type="checkbox" name="Bresponse2_3" value="CBresponse" id="Bresponse2_3" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 3</h3><input type="text" name="response2_3" placeholder="troisième réponse" style="width:100%;"></div>
                <input type="checkbox" name="Bresponse2_4" value="CBresponse" id="Bresponse2_4" onclick="response(id)" class="col-1 align-self-center">
                <div class="col-4"><h3>Réponse 4</h3><input type="text" name="response2_4" placeholder="quatrième réponse" style="width:100%;"></div>
            </div>
            <p>Veuillez cocher la bonne réponse</p>
        </div>
        <div class="d-flex flex-column align-items-center">
            <button class="mx-4" style="width:25%;" onclick="nvQuestion()">Ajoutez une question</button>
            <input type="submit" class="m-4 btn btn-outline-danger fs-5 fw-bold" value="Créer" style="width:20%;">
        </div>
    </form>
</body>
</html>