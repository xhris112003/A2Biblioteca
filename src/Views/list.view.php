
<!DOCTYPE html>
<html lang="en">
<head>
<title>Users list!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
</head>
<body>
<div class="container"><br/><br/>
    <div class="row">
        <div class="col-lg-10">
            <h2>Users list!</h2>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal">
              Add New Admin
            </button>
            <br/><br/>
            <a type="button" href="auth/goBack"class="btn btn-outline-dark">
              Return
            </a>
        </div>
        <div class="col-lg-2">
            <a type="button" href="dashboard/bookList"class="btn btn-outline-success">
              Book list
            </a>
        </div>
        
    </div>
    <br>
    <table class="table" id="tableUser">
        <thead>
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Email</th>  
                <th>Password</th>
                <th width="280px">Action</th>
            </tr>
        </thead>  
        <tbody>
       <?php      
        foreach($data as $row):
        ?>
        <tr id="<?php echo $row->id; ?>">
          <td><?php echo $row->id; ?></td>
          <td><?php echo $row->username; ?></td>
          <td><?php echo $row->email; ?></td>
          <td><?php echo $row->passwd; ?></td>
          <td>
            <a data-id="<?php echo $row->id; ?>" class="btn btn-warning btnEdit"><i class="fa fa-pencil-square-o"></i></a>
            <a id="borrar" data-id="<?php echo $row->id; ?>" class="btn btn-danger btnDelete"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        <?php
          endforeach;
        ?>
        </tbody>
    </table>


</div>
</body>
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add AdminUser</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addUser" name="addUser" action="/auth/registerAdmin" method="post">
      <div class="modal-body">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter Name" name="username">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
      $('#tableUser').DataTable();

  });
  $(document).on('click', '#borrar', function() {
    var id = $(this).data('id');
    // Aquí puedes enviar una petición ajax para actualizar el estado de disponibilidad del libro correspondiente
    $.ajax({
        url: '/dashboard/borrar_registros', // Dirección del script que realizará la actualización
        type: 'POST',
        data: {
            id: id,
        },
        success: function (data) {
            // Aquí puedes manejar la respuesta del servidor
            console.log(data);
            location.reload();
        }
    });
    });
  
</script>
