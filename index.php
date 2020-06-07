<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Welcome to Hullmarket!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">
</head>

<body>

 <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="index.php">Hullmarket.com<span class="sr-only">(current)</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="about.php">About and Contact</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          <a class="nav-link" href="shoppingcart.php">Shopping Cart</a>
        </form>
      </div>
    </nav>
    
    
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
   $query = "select * from items";
   $result = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($result)){
       $id = $row['id'];
       $name = $row['name'];
       $description = $row['description'];
       $price = $row['price'];
       
       echo "<tr>";
       echo "<td>$name</td>";
       echo "<td>$description</td>";
       echo "<td>$price</td>";
       echo "<td><button>Add to Cart</button></td>";
       echo "</tr>";
   }
   ?>
  </tbody>
</table>

</body>
</html>