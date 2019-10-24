<div style="margin-left: 6.5%;">
<div class='card-deck '>
  <?php 
  foreach($row as $r)
  {
    for($i=0; $i<sizeof($r); $i++){
        if($i%4 == 0){
        echo "<div class='card-deck'>";
        }
    }
    
  ?>
      <div class="card ">
        <img class="card-img-top" src="<?php echo base_url();?>uploads/<?php echo $r->PicName; ?>" alt="Card image cap" style="height: 250px; width: 270px;">
        <div class="card-body text-center">
          <h5 class="card-title"><?php echo $r->Name ; ?> </h5>
          <p class="card-text" style="width: 230px;"><?php echo $r->Description; ?></p>
          <p class="card-text text-info"><?php echo "Ksh. ". $r->Price; ?></p>
          <div class="text-center">
            <a href = "<?php echo base_url(); ?>order/generate/<?php echo $r->ID; ?>/" class = "btn btn-primary">Add <i class="fas fa-cart-plus"></i></a>
          </div>
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

