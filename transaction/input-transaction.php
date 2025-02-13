<?php
include('../config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Penjualan | Input Transaction</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Transaction
            </div>
            <div class="card-body">
              <form action="save-transaction.php" method="POST">
                
                <div class="form-group">
                  <label>Customer</label>
                  <select name="id_cust" id="id_cust" class="form-control">
                    <option value="">Customer</option>

                    <?php
                    $querySup = "SELECT * FROM customer";
                    $result = $connection->query($querySup);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";
                        }
                    }
                    ?>

                  </select>
                </div>
                
                <div class="form-group">
                  <label>Product</label>
                  <select name="id_product" id="id_product" class="form-control">
                    <option value="">Product</option>

                    <?php
                    $queryProd = "SELECT * FROM product";
                    $result = $connection->query($queryProd);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='{$row['id']}'>{$row['name']}</option>";
                        }
                    }
                    ?>

                  </select>
                </div>
                
                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" name="qty" placeholder="Quantity" class="form-control">
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