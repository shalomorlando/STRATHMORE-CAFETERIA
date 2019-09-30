
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
      <img class="card-img-top" src="<?php echo base_url(); ?>uploads/<?php echo $r->PicName; ?>" alt="Card image cap" style="width: 250px; height: 200px;">
      <div class="card-body">
        <h5 class="card-title">Item: <?php echo $r->Name ?></h5>
        <p class="card-text" style="width: 200px;"><?php echo $r->Description ?></p>
        <p class="card-text text-info">Price: <?php echo $r->Price ?></p>
        <p class="card-text text-danger">Quantity: <?php echo $r->Quantity ?></p>

        <div class="text-center">
          <button onclick=" //modal content setting js
                  document.getElementById('item_name').innerHTML = '<?php echo $r->Name; ?>';
                  var image = document.createElement('img');
                  var imageParent = document.getElementById('modal_body');
                  image.id = 'modal_img';
                  image.className = 'card-img-top';
                  image.src = '<?php echo base_url(); ?>uploads/<?php echo $r->PicName; ?>';  
                  imageParent.appendChild(image); 
                  var desc = document.getElementById('des_text');
                  desc.value = '<?php echo $r->Description; ?>';
                  var qnty = document.getElementById('quantity_text');
                  qnty.value = '<?php echo $r->Quantity; ?>';
                  var itemno = document.getElementById('item_text');
                  itemno.value = '<?php echo $r->ID; ?>'
                  var price = document.getElementById('price_text');
                  price.value = '<?php echo $r->Price; ?>';
                    "
                  
             class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit <i class="far fa-edit"></i></button>
            <a href="<?php echo base_url(); ?>upload/del_item/<?php echo $r->ID; ?> " class="btn btn-danger">Del. <i class="far fa-trash-alt"></i></a> 
        </div>

      </div>
      
    </div>
<!-- The Modal -->
<div class="modal " id="myModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="item_name" class="modal-title"></h4>
        <button onclick="location.reload()" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal_body">
      <form method="POST" action='<?php echo base_url(); ?>upload/insert_edits' enctype='multipart/form-data'>
        <label> Item No.(<i class="fas fa-comment-slash"></i>):<input type = "number" id="item_text" name="itemId" readonly></label><br>
        <label>Descrption (max.255):</label>
        <input type="textarea" style="height: 40px" name="description" id="des_text"><br>
        <label>Available Quantity:  <input type="number" name="quantity" id = "quantity_text"></label>
        <label>Edit Price per Item:  <input type="number" name="price" id = "price_text"></label>  
        <label>Edit Image: <input type = "file" name = "new_img" id="add_image" ></label>
        <label>Current Image:</label>
        
      
      </div>

  

      <!-- Modal footer -->
      <div class="modal-footer">
        
        <center><button class="btnstyle" type="submit" value="Submit" name="upload">Save</button><br><br></center>
        
      </div>
      </form>
    </div>
  </div>
</div>
<!--modale end-->

  <?php
    for($i=0; $i<sizeof($r); $i++){
      if($i%5 == 0){
         echo "</div>";
       }
      }
    } ?>

</div>


</div>



