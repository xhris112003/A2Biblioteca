<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <!-- <img src="/ci4/public/img/1.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            Biblioteca
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav">
               
                 <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                    Login
                    </button>
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                            <main class="container"> 
                                <div class="card-login">
                                <form class="form-login" action="/auth/signin" method="POST">
                            
                                    <div class="form-item"> 
                                        <label for="username"></label>
                                        <input class="form-control" placeholder="Username" type="text" name="username" required>
                                    </div>
                                    <div class="form-item">
                                        <label  placeholder="Password" for="passwd"></label>
                                        <input class="form-control" placeholder="Password" type="password" name="passwd" required>
                                    </div>
                                    <br>
                                    </div>
                                    <div  class="form-only">
                                    <button class="btn btn-primary" type="submit">Sign in</button>
                                    </div>
                                    <br>
                                    <a class="link-primary" href="/register">No tienes cuenta? Registrate.</a>
                                </form>
                                </div>
                                </main>
                            </div>
                            
                            <br>
                        </div>
                    </div>
                    </div>
            </ul>
    </nav>

</header>
<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.postimg.cc/hvN332q1/wallhaven-3km2ry-2560x1080.png"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.postimg.cc/HkdgtLWv/wallhaven-4yz55d-2560x1080.png"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.postimg.cc/ncvx7mxQ/wallhaven-72eeoo-2560x1080.png"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</body>