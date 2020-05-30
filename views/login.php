<?php
require_once '../includes/header.php';
?>
<link rel="stylesheet" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" href="../static/css/all.css">
<link rel="stylesheet" href="../static/css/main.css">
<link rel="stylesheet" href="../static/css/main.css">
<body class="text-center">
    <div class="container  vh-100 col-md-12 col-lg-6 text-center">
        <div class="shadow-sm p-3 mb-5 bg-white rounded mt-5">

            <div class="list-group">
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-center active">
                    <h2 class="my-2 text-center">LOGIN</h2>
                </a>
            </div>
            <div class="list-group">
                <a href="detalleEntrada.php?id=<?= $entrada['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start ">
                    <form action="../controller/login.php" method="post">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Usuario" name=nombre id="usuario">
                        </div>
                        <div class="form-group ">
                            <input class="form-control form-control-lg" type="text" placeholder="Password" name="password" id="password">
                        </div>
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                        }
                        ?>
                        <div class="form-group  my-3">
                            <input type="submit" value="Entrar" class="btn btn-block btn-lg btn-outline-danger">
                        </div>
                    </form>
                </a>
            </div>

        </div>

    </div>
        <?php
        require_once '../includes/footer.php';
        ?>
    
</body>