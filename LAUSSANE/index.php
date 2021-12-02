<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hamza Siddiqui -Software Developer</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LAUSSANE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  z-index: 9;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=email], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=email]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="login.php" class="form-container"  method="post">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hack1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/hack2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/hack3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
 <div class="py-5">
     <h3 class="text-center">About us</h3>
 </div>
<div class="container-fluid">
 <div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="images/10.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
    <h2>Hamza Siddiqui -Software Developer</h2>
    <p class="py-3">Software developers invent the technologies we sometimes take for granted. For instance, that app that rings, sings or buzzes you out of a deep sleep every morning? A software developer helped design that. And when you roll into the office and turn on your computer, clicking and scrolling through social media, music and your personal calendar – software developers had a big hand in shaping those, too.</p>
    <a href="about.php" class="btn btn-success">Know More</a>
</div>
  </div>
</div>
</section>

<section class="my-5">
 <div class="py-5">
     <h3 class="text-center">Our Services</h3>
 </div>

 <div class="container-fluid">
   <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
     <div class="card" >
  <img class="card-img-top" src="images/1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Pablo</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

      </div>

      <div class="col-lg-4 col-md-4 col-12">
     <div class="card" >
  <img class="card-img-top" src="images/1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Pablo</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

      </div>

      <div class="col-lg-4 col-md-4 col-12">
     <div class="card" >
  <img class="card-img-top" src="images/1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Pablo</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

      </div>
      
    </div>
  </div>

</section>

<section class="my-5">
 <div class="py-5">
     <h3 class="text-center">Our Gallery</h3>
 </div>
 
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-4 col-md-4 col-12">
    <img src="images/2.jpg" class="img-fluid pb-3 ">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/3.jpg" class="img-fluid pb-3 ">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/4.jpg" class="img-fluid pb-3 ">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/5.jpg" class="img-fluid pb-3 ">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/6.jpg" class="img-fluid pb-3 ">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/7.jpg" class="img-fluid pb-3 ">
</div>
</div>
</div>
</section>

<section class="my-5">
 <div class="py-5">
     <h3 class="text-center">Contact Us</h3>
 </div>
   <div class="w-50 m-auto">
     <form action="userinfo.php" method="post">
       <div class="form-group">
         <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
         <label>Email</label>
        <input type="email" name="email" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
         <label>Mobile No.</label>
        <input type="tel" name="mobile" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
         <label>Comments</label>
        <textarea class="form-control" name="comments"> 
        </textarea>
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
     </form>
   </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@HamzaSiddiqui -Software Developer</p>
</footer>

</body>
</html>