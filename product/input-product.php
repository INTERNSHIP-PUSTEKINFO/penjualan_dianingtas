<?php
include('../config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Penjualan | Input Product</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Product
            </div>
            <div class="card-body">
              <form action="save-product.php" method="POST">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" placeholder="Name" class="form-control">
                </div>

                <div class="form-group">
                  <label>Price</label>
                  <input type="text" name="price" placeholder="Price" class="form-control">
                </div>

                <div class="form-group">
                  <label>Stock</label>
                  <input type="text" name="stock" placeholder="Stock" class="form-control">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <input type="text" name="category" placeholder="Category" class="form-control">
                </div>

                <div class="form-group">
                  <label>Weight</label>
                  <input type="text" name="weight" placeholder="Weight" class="form-control">
                </div>

                <div class="form-group">
                  <label>Supplier</label>
                  <select name="id_supp" id="id_supp" class="form-control">
                    <option value="">Supplier</option>

                    <?php
                    $query = "SELECT * FROM supplier";
                    $result = $connection->query($query);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['name']}</option>";
                      }
                    }
                    ?>

                  </select>
                </div>
                
                <button type="submit" class="btn btn-success">SAVE</button>
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