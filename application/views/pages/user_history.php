<div style="margin:40px;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order No.</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($row as $r)
  {
  ?>
    <tr>
      <td><?php echo $r->OrderID; ?></td>
      <td><?php echo $r->ItemName; ?></td>
      <td><?php echo $r->Price; ?></td>
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

