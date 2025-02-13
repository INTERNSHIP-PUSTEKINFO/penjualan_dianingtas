<?php 
  
  include('../config.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM product  WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Penjualan | Edit Product</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Edit Product
            </div>
            <div class="card-body">
              <form action="update-product.php" method="POST">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Name" class="form-control">
                </div>

                <div class="form-group">
                  <label>Price</label>
                  <input type="text" name="price" value="<?php echo $row['price'] ?>" placeholder="Price" class="form-control">
                </div>

                <div class="form-group">
                  <label>Stock</label>
                  <input type="text" name="stock" value="<?php echo $row['stock'] ?>" placeholder="Stock" class="form-control">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <input type="text" name="category" value="<?php echo $row['category'] ?>" placeholder="Category" class="form-control">
                </div>

                <div class="form-group">
                  <label>Weight</label>
                  <input type="text" name="weight" value="<?php echo $row['weight'] ?>" placeholder="Weight (gram)" class="form-control">
                </div>

                <div class="form-group">
                  <label>Supplier</label>
                  <select name="id_supp" id="id_supp" class="form-control">

                    <?php
                    $querySup = "SELECT * FROM supplier";
                    $resultSup = $connection->query($querySup);

                    if ($resultSup->num_rows > 0) {
                      while ($rowSup = $resultSup->fetch_assoc()) {
                        $selected = ($rowSup['id'] == $row['id_supp']) ? "selected" : "";
                        echo "<option value='{$rowSup['id']}' $selected>{$rowSup['name']}</option>";
                      }
                    }
                    ?>

                  </select>
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