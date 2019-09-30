
<html lang="en">
    <head>
        <title>E-CAFE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
           

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- External CSS -->
    <link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet">
    
    
    </head>


    <body>
    <!-- Navigation bar -->
  <nav class="navbar navbar-expand-md bg-success navbar-light ">

    <!-- Brand Logo -->
    <a class="navbar-brand text-dark" href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>images/strath.png" height="70px" width="70px">Strathmore University E-Cafe</a>

    <!-- Toggler/collapsibe Button/Hamburger Menu -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link text-dark " href="<?php echo base_url(); ?>" >Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url();?>user/index/menu">Menu</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url(); ?>welcome/about">About us </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url(); ?>user/index/login">Sign-in</a>
        </li>
        
    </ul>
    </div> 
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="">
    
  </div>
  <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo base_url();?>images/main1.jpg" alt="First slide">
    <div class="carousel-caption">
  <h1>Strathmore E-Cafeteria</h1>
 <a  class="btn btn-primary btn-lg" href="<?php echo base_url();?>user/index/menu"> Get Started</a>
</div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>images/main.jpg" alt="Second slide">
    <div class="carousel-caption">
  <h1>Strathmore E-Cafeteria</h1>
 <a  class="btn btn-primary btn-lg" href="<?php echo base_url();?>user/index/menu"> Get Started</a>
</div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo base_url();?>images/main2.jpg" alt="Third slide">
    <div class="carousel-caption">
  <h1>Strathmore E-Cafeteria</h1>
 <a  class="btn btn-primary btn-lg" href="<?php echo base_url();?>user/index/menu"> Get Started</a>
</div>
  </div>
</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>


  <div>
    <p class="fontstyle"> Chef's picks</p>
  </div>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food1.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Rice and Meatballs combo</h5>
      <p class="card-text">Lorem  ipsum</p>
      
        
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Rice</h5>
      <p class="card-text">Plain rice .</p>
     
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food8.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pilau</h5>
      <p class="card-text">Chef's pilau</p>
      
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food3.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Strathmore Club burger</h5>
      <p class="card-text">The burger has fresh lettuce</p>
     
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ugali and Fish Combo</h5>
      <p class="card-text">Lorem  ipsum</p>
      
        
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food4.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fried Chicken</h5>
      <p class="card-text">Plain rice .</p>
     
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food9.jpg" alt="Card image cap" height="208px">
    <div class="card-body">
      <h5 class="card-title">Pasta</h5>
      <p class="card-text">Lorem ipsum</p>
      
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo base_url();?>images/food7.jpg" alt="Card image cap" >
    <div class="card-body">
      <h5 class="card-title">Pizza</h5>
      <p class="card-text">Lorem Ipsum</p>
     
    </div>
  </div>
</div>



  </body>
</html>