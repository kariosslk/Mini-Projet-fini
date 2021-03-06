<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Vue/css/ficheAcueil.css" rel="stylesheet" type="text/css"/>
        <script src="libs/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Vue/Commun/menu.php';
        require_once 'Vue/Commun/connexion.php';
        require_once 'Vue/Commun/fonction.php';
        ?>
        
        <div class="container" id="connexion">
            <form id="inscription" action="Vue/Commun/traitement.php" method="post">
                <fieldset>
                    <div class="form-group mb-2 mt-2">
                        <label for="login">Login :</label>
                        <input type="text" class="form-control champs-saisie" id="login" name="login">
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" class="form-control champs-saisie" id="pwd" name="pwd">
                    </div>
                    <div class="checkbox mb-3 mt-3">
                        <label>
                            <input type="checkbox">
                            &nbsp
                            Mémoriser</label>
                    </div>
                    <div style="float: right">
                        <button type="submit" class="btn btn-primary ">Connexion</button> 
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
