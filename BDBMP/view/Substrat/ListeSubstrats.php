<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des substrats</title>
</head>
<body>

<div class="py-5">
    <div class="container">
        <div class="row hidden-md-up">
            <?php
            foreach ($tab_s as $s) {
                echo '<div class="col-sm-4">';
                echo '<div class="card text-white bg-dark mb-3" style="width: 18rem;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($s[1]) . '</h5>';
                echo '<p>Identifiant : ' . htmlspecialchars($s[0]) . '</p>';
                if($s[13] != -1.00){
                    echo '<p>BMP MV : '. $s[13] .' nlch4.kgMV-1</p>';
                }
                if($s[14] != -1.00){
                    echo '<p>BMP MF : '. $s[14] .' nlch4.kgMF-1</p>';
                }
                echo '<a href="../controller/Routeur.php?table=ControllerSubstrat&action=read&id=' . $s[0] . '" class="btn btn-primary">Détails</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>