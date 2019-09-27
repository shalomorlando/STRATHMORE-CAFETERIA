<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
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
                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right"><?php echo $r->Price; ?>Kshs.</td>
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
                            <td class="text-right"><strong><?php echo $Total; ?> Kshs.</strong></td>
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
                    <a class="btn btn-success" href="<?php echo base_url(); ?>user/payment"> CHECKOUT </a>
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