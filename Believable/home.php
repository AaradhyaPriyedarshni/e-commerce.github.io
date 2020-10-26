<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

    <style type="text/css">
            body{
                margin:0px;
                padding:0px;
                box-sizing: border-box;
               image-repeat:none;
            }
            .top{
                width:100%;
                height:800px;
                position:relative;
                background-image:url(OIP.jpg);
                background-size:cover;
            }    
    
    </style>
<body>

<div class="top">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark  ">
  
  

  <!-- Links -->
  <ul class="navbar-nav ml-auto px-5">
  <li>
    <!-- Brand -->
  <form class="form-inline " action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </li>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown px-5">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="registration.php">New Customer? Register</a>
        <a class="dropdown-item" href="#">My Profile</a>
        <a class="dropdown-item" href="#">Order</a>
        <a class="dropdown-item" href="#">Wishlist</a>
      </div>
    </li>
    <li class="nav-item px-5">
    <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a>
      
    </li>
    <li class="nav-item px-5">
    
     <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down"></i> Cart</a>
     
    </li>
  </ul>
</nav>
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-success   " >
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

<h3 class="animate__animated animate__backInUp">NATURAL FERTILIZERS</h3>

  
</div>
<div class="heighlight">
<h2 class="py-2 px-5 ">Trending Offers</h2>
<h5 class=" px-5" style="color:grey;">Dont Miss It!</h5>
<button class="btn btn-success view px-3">View All</button>
</div>
<div class="container">
<div class="row py-5">
<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'commerce');
    
    $query = "SELECT * FROM `products` ORDER BY id ASC";
    $queryfire = mysqli_query($con,$query);
    $num = mysqli_num_rows($queryfire);
    if($num > 0){
        while($product = mysqli_fetch_array($queryfire)){
            ?>

            <div class="col-lg-3 col-md-3 col-sm-12 animate__animated animate__bounce animate__delay-5s animate__infinite	infinite">
                <form action="">
                    <div class="card">
                        <div class="card-body">
                            <img src=" <?php echo  $product['image'] ?>" alt="" class="img-fluid items " style="width:200px;height:200px;">
                            <h4 class ="text-center"><?php echo $product['name'] ?> </h4>
                            <h5 class ="text-center" > &#8377 <?php echo $product['price'] ?><span>(<?php echo $product['discount'] ?>%OFF)</span></h5>
                            <a href="index.php?id=<?php echo $product['id']; ?>" class="btn btn-success ml-5">Add to cart</a>
                            
                        </div>

                    </div>
                </form> 

            </div>
<?php
        }
    }
?>
</div>
</div>
<div class="partition"></div>
  

<div class="heighlight">
<h2 class="py-2 px-5">Top Related Products For You</h2>
<h5 class=" px-5" style="color:grey;">Hurry Up! Only few are left</h5>
<button class="btn btn-success view px-3">View All</button>
</div>
<div class="container">
<div class="row py-5 products">
<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'commerce');
    
    $query = "SELECT * FROM `products`ORDER BY id ASC";
    $queryfire = mysqli_query($con,$query);
    $num = mysqli_num_rows($queryfire);
    if($num > 0){
        while($product = mysqli_fetch_array($queryfire)){
            ?>

            <div class="col-lg-3 col-md-3 col-sm-12 animate__animated animate__bounce animate__delay-5s animate__infinite	infinite">
                <form action="">
                    <div class="card">
                        <div class="card-body">
                            <img src=" <?php echo  $product['image'] ?>" alt="" class="img-fluid items " style="width:200px;height:200px;">
                            <h4 class ="text-center"><?php echo $product['name'] ?> </h4>
                            <h5 class ="text-center" > &#8377 <?php echo $product['price'] ?><span>(<?php echo $product['discount'] ?>%OFF)</span></h5>
                            <a href="index.php?id=<?php echo $product['id']; ?>" class="btn btn-success ml-5">Add to cart</a>
                            
                            
                        </div>

                    </div>
                </form> 

            </div>
<?php
        }
    }
?>

</div>
</div>


<div class="heighlight">
<h2 class="py-2 px-5">Fertilizers</h2>
<h5 class=" px-5" style="color:grey;">Make your crop protective</h5>
<button class="btn btn-success view px-3">View All</button>
</div>
<div class="container">
<div class="row py-5">
<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'commerce');
    
    $query = "SELECT * FROM `products`ORDER BY id ASC";
    $queryfire = mysqli_query($con,$query);
    $num = mysqli_num_rows($queryfire);
    if($num > 0){
        while($product = mysqli_fetch_array($queryfire)){
            ?>

            <div class="col-lg-3 col-md-3 col-sm-12 animate__animated animate__bounce animate__delay-5s animate__infinite	infinite">
                <form action="">
                    <div class="card">
                        <div class="card-body">
                            <img src=" <?php echo  $product['image'] ?>" alt="" class="img-fluid items " style="width:200px;height:200px;">
                            <h4 class ="text-center"><?php echo $product['name'] ?> </h4>
                            <h5 class ="text-center" > &#8377 <?php echo $product['price'] ?><span>(<?php echo $product['discount'] ?>%OFF)</span></h5>
                            <a href="index.php?id=<?php echo $product['id']; ?>" class="btn btn-success ml-5">Add to cart</a>
                            
                            
                        </div>

                    </div>
                </form> 

            </div>
<?php
        }
    }
?>

</div>
</div>
</div>

<div class="container-fluid company">

<h2 class="py-3">Our Brands</h2>
<div class="row">
      <div class="col-lg-3">
      <img src="0_LogoPioneer2009.jpg" style="width:100px; height:100px;" class="img-fluid ml-5" alt="hhhhhhh">
      
      </div>
      <div class="col-lg-3">
      <img src="seminis-vector-logo-small (1).jpg" style="width:100px; height:100px;" alt="hhhhhhh">
      
      </div>
      <div class="col-lg-3">
      <img src="0_LogoPioneer2009.jpg"  style="width:100px; height:100px;" alt="hhhhhhh">
      
      </div>
      <div class="col-lg-3">
      <img src="seminis-vector-logo-small (1).jpg" style="width:100px; height:100px;" alt="hhhhhhh">
      
      </div>
     
     
</div>
<div class="row py-5 ">
      <div class="col-lg-3">
      <img src="0_LogoPioneer2009.jpg" style="width:100px; height:100px;" class="img-fluid ml-5" alt="hhhhhhh">
      
      </div>
      <div class="col-lg-3">
      <img src="seminis-vector-logo-small (1).jpg" style="width:100px; height:100px;" alt="hhhhhhh">
      
      </div>
      <div class="col-lg-3">
      <img src="0_LogoPioneer2009.jpg"  style="width:100px; height:100px;" alt="hhhhhhh">
      
      </div>
      <div class="col-lg-3">
      <img src="seminis-vector-logo-small (1).jpg" style="width:100px; height:100px;" alt="hhhhhhh">
      
      </div>
     
     
</div>
</div>


 





<div class="bottom fixed bottom">
    <div class="container foot">
    <h2 class="pt-5">SIGN UP FOR OUR NEWSLETTER</h2>
    <p class="text-dark" >Dont miss out on news and promotions</p>
    <div class="input-group mb-3">
  <input type="text" class="form-control emailin" placeholder="Email Address">
  <div class="input-group-append">
    <button class="btn btn-success emailbtn px-5" type="submit">Submit</button>
  </div>
</div>






<div class="row pt-5">
    <div class="col-lg-3 col-md-3 col-sm 12">
    <ul>
    <li>
      <a href=""><h4>HELP</h4></a>  
    </li>
    <li>
    <a href="">Payments</a> 
    </li>
    <li>
    <a href="">Shipping</a>  
    </li>
    <li>
    <a href="">Cancellation & Return</a>   
    </li>
    <li>
    <a href=""> FAQ</a>   
    </li>
    <li>
    <a href=""> Report Infringement</a>    
    </li>
</ul>
    </div>
    
    
<div class="col-lg-3 col-md-3 col-sm 12">
    <ul>
    <li>
      <a href=""><h4>SOCIAL</h4></a>  
    </li>
    <li>
    <a href="">Facebook</a> 
    </li>
    <li>
    <a href="">Twitter</a>  
    </li>
    <li>
    <a href="">YouTube</a>   
    </li>
    
</ul>
    </div>
    
    

<div class="col-lg-3 col-md-3 col-sm 12">
    <ul>
    <li>
      <a href=""><h4>MY ACCOUNT</h4></a>  
    </li>
    <li>
    <a href="">Our Products</a> 
    </li>
    <li>
    <a href="">What's New</a>  
    </li>
    <li>
    <a href="">Offers</a>   
    </li>
    
    
</ul>
    </div>

    <div class="col-lg-3 col-md-3 col-sm 12">
    <ul>
    <li>
      <a href=""><h4>INFORMATION</h4></a>  
    </li>
    <li>
    <a href="">Store Location</a> 
    </li>
    <li>
    <a href="">Privacy Policy</a>  
    </li>
    <li>
    <a href="">Terms and Conditions</a>   
    </li>
    
    
</ul>
    </div>
    
    

</div>



</body>
</html>