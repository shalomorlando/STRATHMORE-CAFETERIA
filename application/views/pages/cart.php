<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                    <form method="POST" action='<?php echo base_url(); ?>order/checkout' enctype='multipart/form-data'>
                        <tr>
                            <th scope="col">Item No. </th>
                            <th scope="col">Item</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $Total = 0;
                            foreach($row as $r){

                        ?>
                        <tr>
                            <td><?php echo $r->ItemID; ?></td>
                            <td><?php echo $r->ItemName; ?></td>
                            <td><?php echo $r->ItemDes; ?></td>
                            <td style="width: 20%;">
                            <input class="form-control" type="number" min="1" name="quantity[]"value="1"id="qty" onchange="newQuantity(this.value,<?=$r->Price;?>)" />
                            </td>
                            <td class="text-right" ><?php echo $r->Price; ?> Kshs.</td>
                            <td><a class="btn btn-danger" href="<?php echo base_url(); ?>user/remove_cart_item/<?php echo $r->ItemID; ?>"><i class="fas fa-times-circle"></i></a></td>
                        </tr>
                        <?php
                            $Total+= $r->Price;
                            
                            for($i=0; $i<=sizeof($r);$i++){
                                $id_arr[$i] = $r->Price;
                            }

                            }
                        ?>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right" id ="Total"><strong><?php echo $Total; ?> Kshs.</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col mb-4">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-info" href="<?php echo base_url(); ?>user/index/menu"> Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    
                            <input type="hidden" name="data" value="<?php print base64_encode(serialize($row)); ?>"/>
                            <input type="hidden" name="Total" id="totalTxt" value=""/>
                            
                            <input class="btn btn-success" type="submit" name="checkout" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
    var checkoutTotal = <?= $Total?>;
    document.getElementById('totalTxt').value = checkoutTotal;
    var Quantity= 1;
                            //review tricks here
    function newQuantity(quantity, price) {
        var newTotal = 0;
        if(quantity >= Quantity){
            newTotal = (checkoutTotal+price);
        }
        else{
            newTotal = (checkoutTotal-price);
        }
        document.getElementById('Total').innerHTML = (newTotal)+" Ksh.";
        checkoutTotal = newTotal;
        document.getElementById('totalTxt').value = checkoutTotal;
        Quantity = quantity;
    }
    
</script>