<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-sm-6 bg-white" style="left: 25%">

    <form class="text-center border border-light p-5" method="post" action="<?php echo base_url(); ?>register/validation">

        <p class="h4 mb-4">Register</p>

        <!-- Username-->
        <input type="text"  name = "username" class="form-control mb-4" placeholder="Username"/>
        <span class="text-danger"><?php echo form_error('username'); ?></span>

        <!-- Email -->
        <input type="email " id="defaultLoginFormEmail" name = "u_email" class="form-control mb-4" placeholder="E-mail"/>
        <span class="text-danger"><?php echo form_error('u_email'); ?></span>

        <input type="phone" name = "phone" class="form-control mb-4" placeholder="Phone"> 
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name = "pword" class="form-control mb-4" placeholder="Password">
        <span class="text-danger"><?php echo form_error('pword'); ?></span>
    

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit" name = "register" value = "Register" >Sign up</button>
        <a href="<?php echo base_url(); ?>login">Already have an account?</a>

    </form>

</div>