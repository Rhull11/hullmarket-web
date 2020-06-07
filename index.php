<!DOCTYPE html>
<html>
<body>
<head>
	<title>Welcome to Hullmarket!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hullmarket</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li>
      	<form action="/action_page.php">
      		<input type="text" placeholder="Search..." name="search">
      		<button type="submit">Submit</button></form>
   		  </li>
    </ul>
  </div>
</nav>

  <div class="container">
  	<h2>Best Deals!</h2>
  	<p>Currently in stock ready to buy</p>            
  	<table class="table">
    	<thead>
      		<tr>
        		<th>Item</th>
        		<th>Description</th>
        		<th>Price</th>
      		</tr>
    	</thead>
    	<tbody>
      		<tr>
        		<td>Description</td>
        		<td>Doe</td>
       		 	<td>john@example.com</td>
      		</tr>
      		<tr>
        		<td>Price</td>
        		<td>Moe</td>
        		<td>mary@example.com</td>
      		</tr>
      		<tr>
        		<td>July</td>
        		<td>Dooley</td>
        		<td>july@example.com</td>
     	 	</tr>
    	</tbody>
  	</table>
</div>

</body>
</html>