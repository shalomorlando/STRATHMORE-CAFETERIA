
<div style="margin-left: 255px;">
<div class="card-deck ">

  <?php
    foreach($row as $r)
    {
      for($i=0; $i<sizeof($r); $i++){
        if($i%5 == 0){
        echo "<div class='card-deck'>";
        }
      }
      
    ?>
    <div class="card">
      <img class="card-img-top" src="<?php echo base_url(); ?>uploads/<?php echo $r->PicName; ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Item: <?php echo $r->Name ?></h5>
        <p class="card-text"><?php echo $r->Description ?></p>
        <p class="card-text text-info">Price: <?php echo $r->Price ?></p>

        <div class="text-center">
        <a href="#" class="btn btn-primary">Edit</a>
          </div>
      </div>

    </div>
  <?php
    for($i=0; $i<sizeof($r); $i++){
      if($i%5 == 0){
         echo "</div>";
       }
      }
    } ?>

</div>

</div>



