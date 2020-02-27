<?php
 include 'header.php';
 
include '../testone/connection.php';

$statement =$conn->prepare('select * from testone_products');

$result = $statement->execute();

$rows = $statement->fetchAll();


?>

<div class="container">

  <div class="row justify-content-md-center mt-5">

    <div class="col-md-6">

      <h2 class="text-center">Products List</h2>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($rows as $key=>$val){
              ?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['price']; ?></td>
                <td><?php echo $val['quantity']; ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>


    </div>
  
  </div>

</div>

<?php
 include 'footer.php';
?>