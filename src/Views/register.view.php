<?php include 'partials/header.view.php';?>
<body>
  <h3 class="text-center" >Register</h3>
  <div class="form-group">
                            <main class="container"> 
                                <div class="card-login">
                                <form class="form-login" action="/auth/signup" method="POST">
                            
                                    <div class="form-item"> 
                                        <label for="username"></label>
                                        <input class="form-control" placeholder="Username" type="text" name="username" required>
                                    </div>
                                    <div class="form-item">
                                        <label  placeholder="Password" for="passwd"></label>
                                        <input class="form-control" placeholder="Password" type="password" name="passwd" required>
                                    </div>
                                  <div class="form-item">
                                        <label  placeholder="Email" for="email"></label>
                                        <input class="form-control" placeholder="Email" type="text" name="email" required>
                                  </div>
                                    <div  class="form-only">
                                    <br>
                                    <button class="btn btn-primary" type="submit">Sign up</button>
                                    </div>
                                    <br>
                                </form>
                                </div>
</body>