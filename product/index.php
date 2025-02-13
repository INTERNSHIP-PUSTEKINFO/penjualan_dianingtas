<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Penjualan | Product</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="../" class="btn btn-secondary">←</a>
              Product
            </div>
            <div class="card-body">
              <a href="input-product.php" class="btn btn-md btn-success" style="margin-bottom: 10px">ADD DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Category</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../config.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM product");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['price'] ?></td>
                      <td><?php echo $row['stock'] ?></td>
                      <td><?php echo $row['category'] ?></td>
                      <td><?php echo $row['weight'] ?></td>
                      <td>
                        <?php
                          $id_supp = $row['id_supp'];
                          $querySup = mysqli_query($connection, "SELECT name FROM supplier WHERE id = $id_supp");
                          
                          if ($querySup) {
                              $supplierRow = mysqli_fetch_assoc($querySup);
                              echo $supplierRow['name'];
                          }
                        ?>
                      </td>
                      <td class="text-center">
                        <a href="edit-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="delete-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">DELETE</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>