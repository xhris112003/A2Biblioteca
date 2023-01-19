<?php include 'partials/header.view.php';?>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-portada">
          <div class="perfil-usuario-avatar">
            <img src="<?=$_SESSION["user"]->img?>" alt="img-avatar"/>
          </div>
        </div>
      </div>

  
      <div class="perfil-usuario-body">
        <div class="perfil-usuario-bio">
          <h4 class="titulo"><?=$_SESSION["user"]->username?></h4>
        </div>

        <div class="perfil-usuario">
          <ul class="lista-datos">
            <p>Nombre de Usario: </p>
            <p style="font-size:small;"><?=$_SESSION["user"]->username?></p>
            <p>Correo electrónico: </p>
            <p style="font-size:small;"><?=$_SESSION["user"]->email?></p>
          </ul>
        </div>
      </div>

      
      <div class="historial">
        <div>
          <h3 class="titulo">Historial</h3>
          </div>
          <div>
        <ul class="lista-datos">
        <?php

<<<<<<< Updated upstream
          foreach($prestec as $row):
        ?>
        <?php if ($row->Usuario_id == $_SESSION["user"]->id){?>
        <p style="font-size:small;"><?= $row->Libro_isbn?></p>
        <?}?>
        <?php
=======
        foreach($prestecs as $row):
        ?>
          <p><?= $row->Libro_isbn;?></p>
          <?php
>>>>>>> Stashed changes
          endforeach;
        ?>
        </ul>
      </div>
   
    </div>
    <br/><br/>
    <a type="button" href="/auth/goBack"class="btn btn-outline-dark">
        Return
    </a>
    </section>
  </body>
  
</html>
<script>
  $(document).on('click', '#devolver', function() {
    var isbn = $(this).data('isbn');
    // Aquí puedes enviar una petición ajax para actualizar el estado de disponibilidad del libro correspondiente
    $.ajax({
        url: '/dashboard/devolver', // Dirección del script que realizará la actualización
        type: 'POST',
        data: {
            isbn: isbn
        },
        success: function (data) {
            // Aquí puedes manejar la respuesta del servidor
            console.log(data);
            location.reload();
        }
    });
    });
</script>
<?php include 'partials/style.view.php';?>