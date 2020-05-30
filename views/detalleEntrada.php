<?php
include '../includes/header.php';
include '../includes/nav.php';
$entrada = detalleEntrada($conexion, $_GET['id']);
?>
<link rel="stylesheet" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" href="../static/css/all.css">
<link rel="stylesheet" href="../static/css/main.css">


<div class="container comprobante">
<div class="shadow-sm p-3 mb-5 bg-white rounded">   
    <div class="container p-t3 px-5">
    <h1 class="text-center text-muted  "> Detalle de pago por : <?= $entrada['categoria'] ?></h1>
        <div class="row p-5">
            <div class="col-6 border-bottom border-top py-3">
                <h3 class="text-center">Bien : <?= $entrada['bien'] ?> </h3>
            </div>
            <div class="col-6 border-bottom border-top py-3">
                <h3 class="text-center">Categoria : <?= $entrada['categoria'] ?> </h3>
            </div>
            <div class="col-6 border-right border-bottom py-3 text-center">
                <h3 >Valor : </h3>
                <h3 ><?= $entrada['valor'] ?> </h3>
                <h3 >Forma de pago : </h3>
                <h3 ><?= $entrada['pago'] ?> </h3>
            </div>
            <div class="col-6 border-left border-bottom py-3">
                <h3 class="text-center">Fecha del Pago : </h3>
                <h3 class="text-center"><?= $entrada['fecha'] ?> </h3>
            </div>
            <div class="col-12 border-top py-3 text-center">
                <h3 class="">Descripcion : </h3>
                <h3 class=""><?= $entrada['descripcion'] ?> </h3>
                <img src="<?= $entrada['imagen'] ?>" alt="user" class="img-thumbnail img-fluid" style="max-width: 400px;">
            </div>
            <button class="btn btn-lg btn-block btn-danger px-5 py-3"><a href="entradaCategoria.php?id=<?= $entrada['idCategoria'] ?>&nombre=<?= $entrada['categoria'] ?>">Voler a Categoria de <?= $entrada['categoria'] ?></a></button>
        </div>
    </div>
</div>
</div>
