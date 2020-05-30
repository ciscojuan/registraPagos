<!--nav-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="#"><h3>RegistraPagos</h3></a>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                    <?php
                        if(isset($_SESSION['usuario'])):?>
                            <h3 class=" mr-3">Bienvenido <?= $_SESSION['usuario']['nombre']?></h3>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <form action="includes/logout.php"><button id="menu-toggle" type="submit" class="btn btn-outline-danger btn-lg ">Log Out</button></form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--endnav-->