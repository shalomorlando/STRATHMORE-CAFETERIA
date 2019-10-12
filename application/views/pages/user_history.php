<div style="margin:40px;">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cart #</th>
      <th scope="col">Order No.</th>
      <th scope="col">Item</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub Total</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($row as $r)
  {
  ?>
    <tr>
      <td><?php echo $r->CartID; ?></td>
      <td><?php echo $r->OrderID; ?></td>
      <td><?php echo $r->ItemName; ?></td>
      <td><?php echo $r->Price; ?></td>
      <td><?php echo $r->Quantity; ?></td>
      <td><?php echo $r->SubTotal; ?></td>
      <td><?php echo $r->TimeStamp; ?></td>
    </tr>
    <?php } ?>

   
  </tbody>
</table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php print_r($row); ?>

