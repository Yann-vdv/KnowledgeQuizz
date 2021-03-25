<nav class="d-flex bg-light shadow">
<h1 class="ms-4 my-3 fs-3 fw-bold fc-r">KnowledgeQuizz</h1>
  <?php
    //$_SESSION["email"] = "<script>document.writeln(email);</script>";
    if(isset($_SESSION["email"])){
      ?>
        <div class="dropdown align-middle ms-auto">
          <button class="btn btn-outline-danger fs-5 me-4 my-3 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Compte
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">déconnexion</a></li>
          </ul>
        </div>
      <?php
    }
    else{
      ?>
        <div class="ms-auto">
          <a class="text-decoration-none text-danger fs-5 fw-bold me-3 my-3 align-middle" href="inscription.php">s'inscrire</a>
          <button class="me-4 my-3 btn btn-outline-danger fs-5 fw-bold" onclick="window.location='login.php';">se connecter</button>
        </div>
      <?php
    }
  ?>
</nav>