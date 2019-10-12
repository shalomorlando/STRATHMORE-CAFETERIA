<div style="margin-left: 20%; margin-right: 30px;">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Cart #</th>
      <th scope="col">User ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Time Stamp</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  foreach($row as $r)
  {
  ?>
    <tr>
      <td><?php echo $r->CartID; ?></td>
      <td><?php echo $r->UserID; ?></td>
      <td><?php echo $r->Phone; ?></td>
      <td><?php echo $r->Total; ?></td>
      <td><?php echo $r->Status; ?></td>
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


