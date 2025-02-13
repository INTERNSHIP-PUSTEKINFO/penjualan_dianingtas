<?php 
  
  include('../config.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM supplier  WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Penjualan | Edit Supplier</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Edit Supplier
            </div>
            <div class="card-body">
              <form action="update-supplier.php" method="POST">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Name" class="form-control">
                </div>

                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" value="<?php echo $row['contact'] ?>" placeholder="Contact" class="form-control">
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" placeholder="Address" rows="4"><?php echo $row['address'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Email" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>