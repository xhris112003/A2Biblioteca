<?php include 'partials/header.view.php';?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Biblioteca
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="" <span
                            class="sr-only"></span></a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION["user"]->username;?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-center" href="dashboard/profile">Profile</a>
                        <a class="dropdown-item text-center" href="auth/logout" >Logout</a>
                        <?php if ($_SESSION['user']->rol_id == 1){?>
                        <a class="dropdown-item text-center hidden" href="/list" >Admin Profile</a>
                        <?}?>
                    </div>
                </li>
            </ul>
    </nav>
</body>
<div class="d-flex flex-content justify-content-center flex-wrap">
<?php

        foreach($cataleg as $row):
        ?>
    
                <?php if ($row->disponible == 1){?>
                    <?}else{?>
                    <?}?>
                <div class="card border-dark mt-5 mr-5 ml-5" style="width: 18rem;">
                <img src="<? echo $row->imagen?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->titulo;?></h5>
                    <p class="card-text"><?php echo $row->resumen;?></p>
                    <a href="Dashboard/prestec" class="btn btn-primary">Reservar</a>
                </div>
        </div>
        <?php
          endforeach;
        ?>
</div>



