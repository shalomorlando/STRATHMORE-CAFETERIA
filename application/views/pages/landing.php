<!doctype html>
<html lang="en">


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
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>images/main.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>images/main2.jpg" alt="Third slide">
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
    <p class="fontstyle">  Menu</p>
  </div>

  <div class='card-deck'>
  <?php 
  foreach($row as $r)
  {
    for($i=0; $i<sizeof($r); $i++){
      if($i%4 == 0){
      echo "<div class='card-deck'>";
      }
    }
    
  ?>
      <div class="card">
        <img class="card-img-top" src="<?php echo base_url();?>uploads/<?php echo $r->PicName; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?php echo $r->Name ; ?> </h5>
          <p class="card-text"><?php echo $r->Description; ?></p>
          <p class="card-text text-info"><?php echo "Ksh.". $r->Price; ?></p>
          <a href = "<?php echo base_url(); ?>order/generate/<?php echo $r->ID; ?>" class = "btn btn-primary">Order</a>
          
            
        </div>
      </div>
    <?php 
      for($i=0; $i<sizeof($r); $i++){
        if($i%4 == 0){
        echo "</div>";
        }
      }
    } ?>


</div>




  </body>
</html>