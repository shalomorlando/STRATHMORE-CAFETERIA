<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-sm-6 bg-white mx-auto">

    <form class="text-center border border-light p-5" method="post" action="<?php echo base_url(); ?>login/login_validation">

        <p class="h4 mb-4">Sign in</p>
        

        <!-- Email -->
        <input type="email " id="defaultLoginFormEmail" name = "u_email" class="form-control mb-4" placeholder="E-mail">
        <span class="text-danger"><?php echo form_error('u_email'); ?></span> 
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name = "pword" class="form-control mb-4" placeholder="Password">
        <span class="text-danger"><?php echo form_error('pword'); ?></span>
    

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit" name = "send" value = "Login" >Sign in</button>
        <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span> <br>
        <a href="<?php echo base_url(); ?>register">Dont have an account?</a>

    </form>

</div>


