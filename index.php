<?php
include "page/header.php";
include_once "config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
$requete = $pdo->prepare("SELECT * FROM log");   //préparation de la requete
$requete->execute();    //execution de la requete
$admin = $requete->fetchAll();     //récupération du résultat*
?>
<div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
        <div class="px-3">
            <h1>Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
                <a href="page/comptage.php" class="btn btn-lg btn-secondary fw-bold border-black bg-black">Entré un relevé</a>
            </p>
        </div>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
                <label for="floatingInput">Nom d'utilisateur</label>
                <input type="user" class="form-control" id="floatingInput">
            </div>
            <div class="form-floating mb-3">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
            <hr class="my-4">
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
    </div>
</div>
<?php
include "page/footer.php";
?>
