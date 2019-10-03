
<form action="#" method="POST" id="frm" class="mx-auto" style="height: 400px;">

  <div style="text-align: center;">
    <img src="<?php echo base_url(); ?>images/mpesa.jpg" width="145px" height="75x"> 
  </div>

  <div style="text-align: center;">
    <input type="number" name="phoneno" placeholder="Enter your mobile number" class="mx-auto"><br>
    <input type="number" name="amount" placeholder="Enter the total amount" class="mx-auto"><br>
  </div>

  <div class="success-checkmark">
    <div class="check-icon">
      <span class="icon-line line-tip"></span>
      <span class="icon-line line-long"></span>
      <div class="icon-circle"></div>
      <div class="icon-fix"></div>
    </div>
  </div>

  <center>
    <button id="restart" class="btn btn-success btn-lg" style="background-color: #24b324 !important;" >
      <span class="spinner-grow spinner-grow-sm"></span>Checkout
    </button>

    <script>
          $("button").click(function () {
          $(".check-icon").hide();
            setTimeout(function () {

                $(".check-icon").show();
                        }, 10);
                                });
    </script>
  </center>
</form>



<!-- Footer -->
<footer class="page-footer font-small ">

 
  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Strathmore University</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>We pride ourselves in providing quality food with high standards of service at affordable prices.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Other Links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Payments</a>
        </p>
        <p>
          <a href="#!">Privacy Policy</a>
        </p>
        <p>
          <a href="#!">Terms of Use</a>
        </p>
        <p>
          <a href="#!">Lorem Ipsum</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Home</a>
        </p>
        <p>
          <a href="#!">Menu</a>
        </p>
        <p>
          <a href="#!">About Us</a>
        </p>
        <p>
          <a href="#!">Signin</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Nairobi, NB 10012, KE</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> infoStrathmoreecafe@strathomre.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 020 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 020 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 ">© 2019 Copyright:
    <a href="#"> StrathmoreE-Cafe.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>