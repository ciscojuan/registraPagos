<?php
    if(!isset($_POST['busqueda'])){
        header('location: ../index.php');
    };
    ?>
<link rel="stylesheet" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" href="../static/css/all.css">
<link rel="stylesheet" href="../static/css/main.css">
<?php
require_once '../includes/header.php';
require_once '../includes/nav.php';
?>
<div class="container  vh-100 text-center">

    <div class="shadow-sm p-3 mb-5 bg-white rounded mt-5">

        <h2 class="text-center py-3">Consulta - Busqueda </h2>
        <div class="list-group">
            <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start active">
                <h3 class="my-2 text-center">Pagos de <?= $_POST['busqueda'] ?> </h3>
            </a>
        </div>
        <?php

        $busqueda = consultaBusqueda($conexion, $_POST['busqueda']);
        if (!empty($busqueda)) :
            $count = 1;
            while ($entrada = mysqli_fetch_assoc($busqueda)) :
        ?>
                <div class="list-group">
                    <a href="detalleEntrada.php?id=<?= $entrada['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Pago : # <?= $count ?> | valor : $ <?= $entrada['valor'] ?> </h5>
                            <small> <?= $entrada['fecha'] ?></small>
                        </div>
                        <p class="mb-1">Concepto : <?= $entrada['categoria'] ?> | Categoria : <?= $entrada['concepto'] ?> </p>
                        <small>Forma de pago: <?= $entrada['pago'] ?></small>
                    </a>
                </div>
        <?php
                $count += 1;
            endwhile;
        endif;
        ?>
    </div>
    <!--endcontainer-->


</div>
<!--endrow-->


<?php
require_once '../includes/footer.php';
?>
