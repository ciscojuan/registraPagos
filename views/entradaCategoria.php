<?php
require_once '../includes/header.php';
?>
<link rel="stylesheet" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" href="../static/css/all.css">
<link rel="stylesheet" href="../static/css/main.css">
<body class="bg-light">
<?php 
require_once '../includes/nav.php';
?>
    <div class="container">

        <div id="contenido">
            <div class="shadow-sm p-3 mb-5 bg-white rounded mt-5">
                <h2 class="text-center py-3">Consulta - Pagos Por Categoria </h2>
                <div class="list-group">
                    <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <h3 class="my-2 text-center">Pagos de <?= $_GET['nombre'] ?> </h3>
                    </a>
                </div>
                <?php
                $entradas = consultaEntradasC($conexion, $_GET['id']);
                if (!empty($entradas)) :
                    $count = 1;
                    while ($entrada = mysqli_fetch_assoc($entradas)) :
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
        </div>                   
    </div>

<!--endrow-->
<script src="../static/js/jquery-3.5.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../static/js/main.js"></script>

<?php
require_once '../includes/footer.php';
?>
</body>