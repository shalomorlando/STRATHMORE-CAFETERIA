<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
    <head>
        <title> E-Cafe Login </title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="bootstrap-4.2.1-dist/bootstrap-4.2.1-dist/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body class="col-sm-6 bg-white" style="left: 25%">

    <form class="text-center border border-light p-5" action="#!">

        <p class="h4 mb-4">Sign in</p>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>


    </form>

</body>


    
</html>

