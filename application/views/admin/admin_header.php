<html>
    <head>
        <title>E-CAFE</title>
        <!--
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootsrap.css.map"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootsrap.min.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootsrap.min.css.map'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-grid.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-grid.css.map'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-grid.min.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-grid.min.css.map'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-reboot.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-reboot.css.map'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-reboot.min.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-reboot.min.css.map'); ?>"/>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.bundle.js'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.bundle.js.map'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.bundle.min.js'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.bundle.min.js.map'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.js'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.js.map'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.min.js'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/bootsrap.min.js.map'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/jquery.min.js'); ?>"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js/popper.min.js'); ?>"></script>
        -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- External CSS -->
    <link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet">
    
    
  </head>
    <style>
    li a, .dropbtn {
	  display: inline-block;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	li a:hover, .dropdown:hover .dropbtn {
	  background-color: #ff3300;
	}

	li.dropdown {
	  display: inline-block;
      float: right;
      color: black;
      +
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #f9f9f9;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}

	.dropdown-content a {
	  color: black;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	  text-align: left;
	}

	.dropdown-content a:hover {background-color: #ffa366;}

	.dropdown:hover .dropdown-content {
	  display: block;
	}
</style>
<body>
    <!-- Navigation bar -->
  <nav class="navbar navbar-expand-md bg-success navbar-light sticky-top ">

    <!-- Brand Logo -->
    <a class="navbar-brand text-dark" href="<?php echo base_url(); ?>admin/admin_landing"><img src="<?php echo base_url();?>images/strath.png" height="70px" width="70px">Strathmore University E-Cafe</a>

    <!-- Toggler/collapsibe Button/Hamburger Menu -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link text-dark " href="<?php echo base_url(); ?>admin/admin_landing" >Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url(); ?>user/index/menu">Menu</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url(); ?>user/index/about">About us </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-dark" href="<?php echo base_url(); ?>admin">Dashboard <i class="fas fa-user-cog"></i></a>
        </li>
        
        <li class="dropdown nav-item ">
			<a href="javascript:void(0)" class="dropbtn text-dark"><i class="fas fa-user"></i><?php echo " ".$this->session->userdata('uname'); ?> <i class="fas fa-angle-down"></i></a>
			<div class="dropdown-content" >
        <a href="<?php echo base_url(); ?>user/logout"><i class="fas fa-sign-out-alt"></i> Logout?</a>
        <a href="<?php echo base_url(); ?>user/user_history"><i class="fas fa-history"></i> History</a>
        
			  
			</div>
	    </li> 
    </ul>
    </div> 
    </nav>
