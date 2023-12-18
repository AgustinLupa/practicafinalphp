<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>practica final</title>
  </head>
  <body>       
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?php echo site_url('UserController/crearUser') ?>">
                            <div class="form-row align-items-center">
                                <div class="col-sm-3 my-1">
                                    <label class="sr-only" for="inlineFormInputName">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                                </div>
                                <div class="col-sm-3 my-1">
                                    <label class="sr-only" for="password">Password</label>
                                    <div class="input-group">                                                                        
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>                                                                                                
                                <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>                                                                                                   
                    </div>
                </div>
                <br>
                <br>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col"> &nbsp; </th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $u) { ?>
                                <tr>
                                <th scope="row"><?php echo $u['id'] ?></th>
                                <td><?php echo $u['name'] ?></td>
                                <td><a href="<?php echo site_url('UserController/eliminar?id='.$u['id'])  ?>" class="btn btn-danger">Eliminar</a></td>                                
                                </tr>
                                <?php } ?>                                                              
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>