<!-- Page Content -->
<head>
    <meta charset="UTF-8">
    <title>Détails substrat</title>
</head>

<div class="container">

    <h1 class="my-4"><?php echo htmlspecialchars($s[0][1]) ?>
        <small><?php echo htmlspecialchars($s[0][0]) ?></small>
    </h1>

    <div class="row">

        <div class="col-md-4">
            <ul class="list-group">
                <?php
                if( $s[0][2] != -1.00){
                    echo  '<li class="list-group-item">Matière Sèche : ' . $s[0][2] . ' % </li>';
                }
                if( $s[0][3] != -1.00){
                    echo  '<li class="list-group-item">Matière Volatile: ' . $s[0][3] . ' %</li>';
                }
                if( $s[0][4] != -1.00){
                    echo  '<li class="list-group-item">Ratio MS/MV : ' . $s[0][4] . ' %</li>';
                }
                if( $s[0][5] != -1){
                    echo  '<li class="list-group-item">Phosphore : ' .  $s[0][5] . ' ' . $s[0][6] .'</li>';
                }
                if( $s[0][7] != -1){
                    echo  '<li class="list-group-item">Potassium : ' . $s[0][7] . ' ' . $s[0][8] . '</li>';
                }
                if( $s[0][9] != -1){
                    echo  ' <li class="list-group-item">Azote Kjeldahl : ' . $s[0][9] . ' ' . $s[0][10] . '</li>';
                }
                if( $s[0][11] != -1){
                    echo  '<li class="list-group-item">Azote Ammoniacal : ' . $s[0][11] . ' ' . $s[0][12] .'</li>';
                }
                if( $s[0][13] != -1.00){
                    echo  '<li class="list-group-item">BMP MV : ' . $s[0][13] . ' NLCH4.kgMV-1</li>';
                }
                if( $s[0][14] != -1.00){
                    echo  '<li class="list-group-item"> BMP MF : ' . $s[0][14] . ' NLCH4.kgMF-1</li>';
                }
                if( $s[0][15] != -1.00){
                    echo  '<li class="list-group-item">Pourcentage de méthane : ' .  $s[0][15] . ' % </li>';
                }
                ?>
            </ul>
        </div>

    </div>
    <?php
    echo '<a href="../controller/Routeur.php?table=ControllerSubstrat&action=update&id=' . $s[0][0] . '" class="btn btn-primary">Modifier</a>';
    echo '<a href="../controller/Routeur.php?table=ControllerSubstrat&action=delete&id=' . $s[0][0] . '" class="btn btn-danger">Supprimer</a>';
    ?>



</div>
