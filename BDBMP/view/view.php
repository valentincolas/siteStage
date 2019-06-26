

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS + own CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">


</head>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
    <a class="navbar-brand" href="../index.php">BD BMP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../controller/Routeur.php?table=ControllerSubstrat&action=readAll">Substrats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../controller/Routeur.php?table=ControllerSubstrat&action=search">Rechercher</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajouter ...</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="../controller/Routeur.php?table=ControllerSubstrat&action=create">Substrat</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../controller/Routeur.php?table=ControllerSubstrat&action=readStats">Stats</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="../controller/Routeur.php?table=ControllerSubstrat&action=readAll" method="POST">
            <input class="form-control mr-sm-2" type="text" placeholder="Nom du substrat" aria-label="Search" name="nom">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Chercher</button></a>
        </form>

    </div>
</nav>

<main role="main">

    <?php
    $filepath = File::build_path(array("view", $controller, "$view.php"));
    require $filepath;
    ?>

</main>

<footer class="fixed-bottom">
   <!--  <p>&copy; INRA 2019 - <?php echo date("Y"); ?></p> -->
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>