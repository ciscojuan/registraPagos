<?php
include '../includes/header.php';
?>


<div class="container my-5  vh-100">
    <div class="shadow-sm  bg-white rounded">
        
        <div class="list-group">
            <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start active">
                <h3 class="my-2 text-center">Pagos de <?= $_GET['nombre'] ?> </h3>
            </a>
        </div>
        <div class="list-group m-5">
            <a class="list-group-item list-group-item-action flex-column align-items-start ">

                <form action="controller/registro.php/?concepto=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Selecciona Bien :</label>
                        <div class="col-8">
                            <select class="custom-select" name="bien" required>
                                <option selected>Seleciona un bien</option>
                                <?php
                                $bienes = consultaBien($conexion);
                                if (!empty($bienes)) :
                                    while ($bien = mysqli_fetch_assoc($bienes)) :
                                ?>
                                        <option value="<?= $bien['id'] ?>"><?= $bien['nombre'] ?></option>
                                <?php
                                    endwhile;
                                endif;
                                ?>

                            </select>
                        </div>
                    </div>
                    <!--si la categoria no tiene el conseptos, no muestre el input select-->
                    <?php
                    $categorias = consultaCategoria($conexion, $_GET['id']);
                    var_dump($_GET['id']);
             
                    if (empty($categorias)) :
                    else : ?>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Selecciona Categoira</label>
                            <div class="col-8">
                                <select class="custom-select" name="categoria" required>
                                    <option selected>Seleciona una categoria</option>
                                    <?php

                                    $categorias = consultaCategoria($conexion, $_GET['id']);

                                    if (!empty($categorias)) :
                                        while ($categoria = mysqli_fetch_assoc($categorias)) :
                                    ?>
                                            <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </select>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group ">
                        <label class=" col-form-label">Selecciona tipo de Pago :</label>
                        <div class=" custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="tpago" class="custom-control-input" value="2" required>
                            <label class="col-2 custom-control-label" for="customRadio1">Efectivo</label>
                        </div>
                        <div class=" custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="tpago" class="custom-control-input" value="1" required>
                            <label class="col-2 custom-control-label" for="customRadio2">PSE</label>
                        </div>
                        <div class=" custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="tpago" class="custom-control-input" value="3" required>
                            <label class="col-2 custom-control-label" for="customRadio3">Tarjeta</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Valor :</label>
                        <div class="col-8">
                            <input type="number" class="form-control " id="valor" placeholder="$" name="valor" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Fecha del Pago :</label>
                        <div class="col-8">
                            <input class="form-control" type="date" name="fecha" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Descripcion :</label>
                        <div class="col-8">
                            <textarea name="descripcion" id="" cols="30" rows="5" class="form-control" required placeholder="Pago Impuesto - Administracion - Mosquera - $ 300 000, # ref: 000000 999"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Comprobante</label>
                        <div class="col-9 custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="archivo" accept="image/png" required>
                            <label class="custom-file-label" for="customFile">Sube un Comprobante</label>
                        </div>
                    </div>
                    <div class="form-group text-center ">
                        <button type="submit" class="col-6 btn btn-outline-danger btn-lg">Guardar Pago</button>
                    </div>
                </form>
            </a>
        </div>
    </div>
    <!--endshadow-sm-->
</div>