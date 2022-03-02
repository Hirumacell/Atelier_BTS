<?php
include "header.php";
include_once "../config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::UTILISATEUR, Config::MOTDEPASSE);
$requete = $pdo->prepare("SELECT * FROM log");   //préparation de la requete
$requete->execute();    //execution de la requete
$admin = $requete->fetchAll();     //récupération du résultat*
?>
<section>
<div class="container">
    <br>
    <div class="blockquote text-center">
        <h1 class="mb-0">Titre de l'étude</h1>
    </div>
    <form action="../page/tableau.php">
        <div class="form-group">
            <label for="date">date</label>
            <input type="date" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="number">Nombre de personnes</label>
            <input type="number" class="form-control" id="number">
        </div>
        <div class="row">
            <div class="col">
                <label for="number">Angle 1</label>
                <input type="text" class="form-control">
            </div>
            <div class="col">
                <label for="number">Angle 2</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="number">Angle 3</label>
                <input type="text" class="form-control">
            </div>
            <div class="col">
                <label for="number">Angle 4</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-default btn-lg btn-block">Continuer</button>
    </form>
</div>
</section>
<?php
include "footer.php";
?>
