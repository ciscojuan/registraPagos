<?php
require_once '../includes/header.php';
?>
<div class="container text-center mt-5">

    <h2 class="text-center">Consulta - Pagos </h2>
    <?php
    if (isset($_GET['nombre'])) { ?>
        <h2 ><?= $_GET['id'] ?> - <?= $_GET['nombre'] ?> </h2>
    <?php }
    $categoria = $_GET['id'] ?>

    <div class="form-buqueda">
        <form action="views/buscar.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control form-control-lg my-3" name="busqueda">
                <input type="submit" name="buscar" class="btn btn-lg btn-outline-danger">
            </div>
        </form>
    </div>

    <hr>

    <?php
    $categorias = consultaCategoria($conexion, $_GET['id']);

    if (!empty($categorias)) :
        while ($categoria = mysqli_fetch_assoc($categorias)) :
    ?>

            <div class="card text-white bg-danger mb-3 d-inline-block" style="max-width: 20rem;">
                <?php echo '<a href="views/entradaCategoria.php?id=' . $categoria['id'] . '&nombre=' . $categoria['nombre'] . '"  class="list-group-item list-group-item-action  border ">' . $categoria['nombre'] ?></a>
                <div class="card-body">
                    <h4 class="card-title text-center"> 78 </h4>
                    <p class="card-text">Entra aca para ver las entradas de esta categoria.</p>
                </div>
            </div>
        <?php
        endwhile;
    else :
        ?>
        <div class="container  vh-100 text-center">

            <div class="shadow-sm p-3 mb-5 bg-white rounded mt-5">

                <h2 class="text-center py-3">Consulta - Pagos Por Categoria </h2>
                <div class="list-group">
                    <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <h3 class="my-2 text-center">Pagos de <?= $_GET['nombre'] ?> </h3>
                    </a>
                </div>
                <?php
                $entradas = EntradasMantenimiento_Reparacion($conexion, $_GET['id']);
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
            <!--endcontainer-->
        <?php endif; ?>

        </div>
        <!--endcontainer-->
<?php
require_once 'includes/footer.php';
?>