<?php
      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con,'commerce');
      $id = $_GET['id'];
      
      $query = "SELECT * FROM `products` where id ='$id'";
      $queryfire = mysqli_query($con,$query);
      $num = mysqli_num_rows($queryfire);
      if($num > 0){
        $product = mysqli_fetch_array($queryfire);
        $image= $product['image'];
        $qty = $product['qty'];
        $name= $product['name'];
        $price= $product['price'];
        $discount= $product['discount'];
      }
      
?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark  ">
  
  

  <!-- Links -->
  <ul class="navbar-nav ml-auto px-5">
  <li>
    <!-- Brand -->
  <form class="form-inline " action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success " style="border:1px solid black;" type="submit">Search</button>
  </form>
  </li>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown px-5">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">New Customer? Register</a>
        <a class="dropdown-item" href="#">My Profile</a>
        <a class="dropdown-item" href="#">Order</a>
        <a class="dropdown-item" href="#">Wishlist</a>
      </div>
    </li>
    <li class="nav-item px-5">
    <i class="far fa-bell"><a class="nav-link" href="#">Notifications</a></i>
      
    </li>
    <li class="nav-item px-5">
    
    <i class="fas fa-cart-arrow-down"> <a class="nav-link" href="#"> Cart</a></i>
     
    </li>
  </ul>
</nav>
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-success   " >
  <ul class="navbar-nav ml-auto px-5 ">
    <li class="nav-item active px-5">
      <a class="nav-link text-success" href="#">Fertilizers</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link text-success" href="#">Pesticides</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link text-success" href="#">Seeds</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link text-success " href="#">Motor Pump</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link text-success" href="#">Shadenets</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link text-success" href="#">Mulching</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link text-success" href="#">Sprayers</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
   <div class="container">
       <table class="table">
           <thead>
               <tr>
                   <th>Name</th>
                   <th>Quantity</th>
                   <th>Price</th>
                   <th>Discount</th>
                   <th>Total Price</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td><input type="text" class="form-control form-control-sm text-center" value="<?php echo $name ?>" disabled></td>
                   <td><input type="number" class="form-control form-control-sm w-50 text-center" min="1" id="qty" value="<?php echo $qty ?>" ></td>
                   <td><input type="text" class="form-control form-control-sm w-50 text-center" value="<?php echo $price ?>" disabled></td>
                   <td><input type="text" class="form-control form-control-sm w-75 text-center" value="<?php echo $discount ?>" disabled></td>
                   <td><input type="text" class="form-control form-control-sm w-100 text-center" value="<?php echo $price ?>" disabled></td>

               </tr>
           </tbody>

       </table>
       <h6 class="mr-5 float-right text-success">Total:-<?php echo ($price - ($discount*$price)/100) ?></h6>
       <div class="row justify-content-center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card border-0">
                    <img src="<?php echo $image ; ?>" alt="" class="card-img">
                    <div class="card-body">
                        <h6 class="card-title text-warning text-center"><?php echo $name; ?> </h6>
                        <h6 class=" text-center card-title">Qty: <?php echo $qty ; ?> </h6>
                        <h4 class="text-center card-title text-success">&#8377 <?php echo ($price - ($discount*$price)/100); ?> </h4>
                        <button class="btn btn-warning  ml-5 btn-lg checkout">Checkout</button>
                    </div>

                </div>

            </div>
       </div>
   </div>
</div>

</body>
</html>
  