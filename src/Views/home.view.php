<body>
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
                                        <label for="passwd"></label>
                                        <input class="form-control" placeholder="Username" type="text" name="username" required>
                                    </div>
                                    <div class="form-item">
                                        <label  placeholder="Password" for="passwd"></label>
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                    <br>
                                    </div>
                                    <div  class="form-only">
                                    <button class="btn btn-primary" type="submit">Sign in</button>
                                    </div>
                                    <br>
                                    <a class="link-primary" href="">No tienes cuenta? Registrate.</a>
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

</body>