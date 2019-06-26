
<div class="container">
    <ul class="list-group">
        <li class="list-group-item">Nombre total de substrats : <?php echo $nbTotal[0][0] ?></li>
        <?php

            foreach ($countByCateg as $c){
                echo '<li class="list-group-item"> Nombre de substrats dans la catégorie ' . $c[0] . ' = ' . $c[1] . '</li>';
            }
        ?>

    </ul>
</div>
