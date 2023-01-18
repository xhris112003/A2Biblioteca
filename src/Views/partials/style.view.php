<style>
body 
{
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

p{
    font-size:medium;
    padding: 0;
}

.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    align-items: center;
    margin: 10px;
    flex-direction: column;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: flex;
    width: 25%;
    height: 8.2rem;
    justify-content: center;
 
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 100px;
    height: 100px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 100%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 100%;
}


.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}


.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: small;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}


.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 0.16rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 56%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.historial{
    display: flex;
    padding: 0.5rem;
    box-shadow: 0 0 12px rgb(0 0 0 / 20%);
    background-color: #fff;
    border-radius: 15px;
    width: 56%;
    flex-direction: column;
    align-items: center;
}

.lista-datos{
padding-left: 0px;
}


#contenedor{
    display: flex;
    justify-items: center;
}

.perfil-usuario-bio{
    padding: 0px;
}
</style>