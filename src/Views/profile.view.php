

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
          <p>Libro </p>
          <p>Libro </p>
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
<?php include 'partials/style.view.php';?>