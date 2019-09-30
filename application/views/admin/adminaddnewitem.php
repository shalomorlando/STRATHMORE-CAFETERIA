
<!-- input form -->
<form method="POST" action="<?php echo base_url(); ?>upload/do_upload" id="frm" enctype="multipart/form-data" style="height: 700px;">

<h3><center> Admin </center></h3>


    <label >Food item:</label><br>
    <input id="textbox" type="text" name="foodItem">

    <br>
    <br>
    <label>Upload Picture:</label>
    <br>
    <input type="file" name="uploadfile" id="Picture">
    <br>
    <br>
    <label>Price:</label>
    <br>
    <input id="textbox" type="text" name="price"><br><br>
    <label>Food Type: </label><br>
    <select name="type" id="selector" >
        <option value = "Main">Main</option>
        <option value = "Snack">Snack</option>
        <option value = "Salad">Salad</option>
        <option value = "Beverage">Beverage</option>
        <option value = "Special">Chef's Special</option>
        <option value = "Other">Other</option>
    </select>
    <br>
    <br>
    <label>Item Description (Short-max.255):</label>
    <br>
    <input type="text" name="description" id="desptn"/>
    <br>
    <br>
    
    
    <button class="btnstyle" type="submit" value="Submit" name="upload">Save</button><br><br>
    
 </form>



