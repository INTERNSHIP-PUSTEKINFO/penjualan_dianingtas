<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Penjualan | Edit Transaction</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Edit Transaction
            </div>
            <div class="card-body">
              <form action="update-transaction.php" method="POST">

              <?php 
                include('../config.php');
                $id = $_GET['id'];           
                $query = "SELECT * FROM transaction WHERE id = $id LIMIT 1";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($result);
              ?>

                <div class="form-group">
                  <label>Customer</label>
                  <select name="id_cust" id="id_cust" class="form-control">

                    <?php
                    $queryCust = "SELECT * FROM customer";
                    $resultCust = $connection->query($queryCust);

                    if ($resultCust->num_rows > 0) {
                      while ($rowCust = $resultCust->fetch_assoc()) {
                        $selected = ($rowCust['id'] == $row['id_cust']) ? "selected" : "";
                        echo "<option value='{$rowCust['id']}' $selected>{$rowCust['name']}</option>";
                      }
                    }
                    ?>

                  </select>
                </div>

                <div class="form-group">
                  <label>Product</label>
                  <select name="id_product" id="id_product" class="form-control">

                    <?php
                    $queryProd = "SELECT * FROM product";
                    $resultProd = $connection->query($queryProd);

                    if ($resultProd->num_rows > 0) {
                      while ($rowProd = $resultProd->fetch_assoc()) {
                        $selected = ($rowProd['id'] == $row['id_product']) ? "selected" : "";
                        echo "<option value='{$rowProd['id']}' $selected>{$rowProd['name']}</option>";
                      }
                    }
                    ?>

                  </select>
                </div>

                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" name="qty" value="<?php echo $row['qty'] ?>" placeholder="Quantity" class="form-control">
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