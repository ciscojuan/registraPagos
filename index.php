<?php
require_once 'includes/header.php';
if(!isset($_SESSION['usuario'])){
    header('location: views/login.php');
}else{?>
<body class="bg-light">
<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="bg-danger">
            <div class="sidebar-header">
                <h3>RegistraPagos</h3>
            </div>

            <ul class="list-unstyled components">
                <li><a href="#" id="toggle-consultar" class="border" data-toggle="collapse" data-target="#consultar">Consultar</a></li>
                <div id="consultar" >
                    <?php
                        $conceptos = consultaConcepto($conexion);
                        if(!empty($conceptos)):
                            while($concepto = mysqli_fetch_assoc($conceptos)):
                            ?>
                            <li><a href="#" id="consulta-<?= $concepto['id'] ?>" class=" border "><?= $concepto['nombre'] ?></a></li>   
                            <?php
                            endwhile;
                        endif;
                    ?>
                </div>
                <hr>
                <li><a href="#" id="toggle-registrar" class="border" data-toggle="collapse" data-target="#registrar">Registrar</a></li>
                <div id="registrar" class="list-group list-group-flush">
                    <?php
                        $conceptos = consultaConcepto($conexion);
                        if(!empty($conceptos)):
                            while($concepto = mysqli_fetch_assoc($conceptos)):
                            ?>
                            <li><a href="#" id="registro-<?= $concepto['id'] ?>" class=" border "><?= $concepto['nombre'] ?></a></li>   
                            <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </ul>
        </nav>

                <!-- Page Content Holder -->
<div id="content">
<?php 
require_once 'includes/nav.php';
?>
<div id="contenido">

</div>
<?php
}
require_once 'includes/footer.php';
?>
