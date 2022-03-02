<?php
include "header.php";
include_once "config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
$requete = $pdo->prepare("SELECT * FROM log");   //préparation de la requete
$requete->execute();    //execution de la requete
$admin = $requete->fetchAll();     //récupération du résultat*
?>
<div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Ceci est un titre</h1>
        <p class="col-lg-10 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid autem culpa dignissimos eum eveniet fugiat illo ipsa, non odit officiis omnis quis recusandae rem sint sit velit? Commodi, natus?</p>
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
include "footer.php";
?>
