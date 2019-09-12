<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment | Module</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style type="text/css">

        
        body {
            background-image: url("e-cafe.jpg");
            background-color: #fff;
            /*margin: 40px;*/
        }

        .container {
            margin: auto;
            position:relative;
            height: 500px;
            margin-top:5%;
            max-width: 440px;
            border:1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
        .form-group{
            max-width:400px;
        }
        .btn{
            display: block;
            max-width: 300px;
            margin: auto;
        }
        .head-roll{
            display: block;
            max-width: 300px;
            margin: auto;
        }
    </style>
</head>
<body>
    
    <div class="container" >
            <form action="#">
                <div class="head-roll" id="">
                        <img src="mpesa.png" alt="LIPA NA MPESA">
                </div>
                    
                <div class="form-group">
                        <input type="text" class="form-control" id="mobileNumber" placeholder="ENTER YOUR REGISTERED M-PESA MOBILE NUMBER">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="idNumber" placeholder="ENTER YOUR NATIONAL ID NUMBER ">
                </div>
                <div class="btn">
                        <button type="submit" class="btn btn-default">Make Payment</button>
                </div>
            </form>
    </div>
</body>
</html>