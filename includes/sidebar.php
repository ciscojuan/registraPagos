

<!-- Sidebar -->
<div class="d-flex" id="wrapper" class="">


<div class="border vh-100">
    <div class="contenedor"  id="sidebar-wrapper">
        <div class="sidebar-heading text-center font-italic">Menu <?php /*$_SESSION['usuario']['tipoUsuario_id']*/ ?> </div>

        <a href="#" id="toggle-consultar" class="list-group-item list-group-item-action  border border-primary" data-toggle="collapse" data-target="#consultar">Consultar</a>
        <div id="consultar" class="list-group list-group-flush ">
        <?php
            $conceptos = consultaConcepto($conexion);
            if(!empty($conceptos)):
                while($concepto = mysqli_fetch_assoc($conceptos)):
                ?>  <a href="#" id="consulta-<?= $concepto['id'] ?>" class="list-group-item list-group-item-action  border "><?= $concepto['nombre'] ?></a> 
                <?php
                endwhile;
            endif;
            ?>   
        </div>




        <a href="#" id="toggle-registrar" class="list-group-item list-group-item-action  border border-primary" data-toggle="collapse" data-target="#registrar">Registrar</a>
        <div id="registrar" class="list-group list-group-flush">
            <?php
            $conceptos = consultaConcepto($conexion);
            if(!empty($conceptos)):
                while($concepto = mysqli_fetch_assoc($conceptos)):
                ?>  <a href="#" id="registro-<?= $concepto['id'] ?>" class="list-group-item list-group-item-action  border "><?= $concepto['nombre'] ?></a> 
                <?php
                endwhile;
            endif;
            ?>   
        </div>

        </div>
    </div>

</div>

<!-- endsidebar-->