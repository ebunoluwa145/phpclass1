<?php 
include_once "dbconnect.php";
if(isset($_POST["addproduct"])){
  $productname = $_POST["productname"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];


  $image = $_FILES["image"];
  $tmp_dir = $_FILES["image"]["tmp_name"];
  $imageSize = $_FILES["image"]["size"];
  $imgEXT = strtolower(pathinfo($image, PATHINFO_EXTENSION));

  $image = $image.".".$upload_dir.$image;


  $upload_dir = 'images/';
  if($imageSize < 5000000){
    move_uploaded_file($tmp_dir, $upload_dir.$image)
  }
}
$sql = "INSERT INTO product(productname, price, quantity, image) values('$productname', '$price', '$quantity', '$image')";
if($db -> query($sql)){
  

  echo "<script> alert('product added successfully')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Logo</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- Button trigger modal -->
    <h1>Good choice</h1>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add product
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
     <form method = "post">
      <div class="form-group ">
        <label class="form-label"> Product name</label>
        <input type="text" class="form-control" placeholder ="productname" name="productname">

      </div>
      <div class="form-group">
        <label class="form-label"> Price</label>
        <input type="number" class="form-control" min ="1" placeholder ="price" name="price" >

      </div>
      <div class="form-group">
        <label class="form-label"> Quantity</label>
        <input type="number" class="form-control" min ="1"  placeholder ="quantity" name="quantity" >

      </div>
      <div class="form-group">
        <label class="form-label"> Image</label>
        <input type="file" class="form-control"   placeholder ="quantity" name="image" accept="image/png, image/jpeg, image/jpg, image/gif" >

      </div>
      


     
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" name ="addproduct">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></>
</body>
</html>