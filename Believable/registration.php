<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css">
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
            .container-fluid{
                width:100%;
                height:650px;
                position:relative;
                background-image:url(OIP.jpg);
                background-size:cover;
            }    
    
    </style>
<body>
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

<div class="container-fluid">
  <div class="box">
      <div class="welcome">
            <h2 class="text-center text-white py-5 ">Looks like you're <br>new here!</h2>
            <p class="text-center text-light ">Signup here with your new mobile <br>number to get started</p>
      </div>
      <form action=" register.php">
            <div class="form-group mbnbr">
                <label for="phone_number">Enter The Mobile Number</label><br><br>
                <input type="phone number"><br><br>
                <button class="btn btn-lg btn-danger continue mt-5">Continue</button><br><br>
                <button class="btn btn-lg btn-light existing">Existing User ? Login</button>
               
                
                
            </div>
            

     
  </div>
</div>

</body>
</html>