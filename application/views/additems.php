<!doctype>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Item</title>
		<style>
			.items{
				margin-left: 250px;
				margin-right: 150px;
				border: 1px solid;
				border-color: grey;
				padding: 20px;
				padding-left: 30px;
				padding-bottom: 20px;
				font-size: 20px;
			}
			.btn{
				border-radius: 1em;
				background-color: grey;
				color: white;
				font-size:20px;
				padding:10px;
				text-align: center;
			}
			* {
				margin:0px;
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  height: 700px; /* Should be removed. Only for demonstration */
}

.left {
  width: 20%;
}

.right {
  width: 80%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
		</style>
	</head>
	<body>

	<div class="row">
	<div class="column left" style="color:white; font-family:sans-serif; background-color:grey;">
		<br>
		<h2 >ADMIN</h2>
	
		<ul style="list-style: none; padding:40px; font-size:20px; font-style: sans-serif;">
			<li><img src="<?php echo  base_url();?>Images/home.png" style="height: 30px; width:30px;">  Home</li>
			<li><img src="<?php echo base_url();?>Images/menu.png" style="height: 30px; width:30px; ">  Menu</li>
			<li><img src="<?php echo base_url();?>Images/add.png" style="height: 30px; width:30px; ">  Add Food</li>
			<li><img src="<?php echo base_url();?>Images/report.png" style="height: 30px; width:30px; ">  Reports</li>
			<li><img src="<?php echo base_url();?>Images/logout.png" style="height: 30px; width:30px; ">  Logout</li>
		</ul>
	</div>
	<div class="column right" style="background-color:white; font-family: sans-serif;"><br>
			<h2>Add food item</h2>

		<div class="items">
			<br><br>
			<label>Food Item</label>
			<input type="text">
			<br><br><br>
			<label>Upload Picture</label>
			<input type="file">
			<br><br><br>
			<label>Price</label>
			<input type="num">
			<br><br><br>
			<input type="button" class="btn" value="save">
			<br><br><br>
	</div>

		</div>
	</div>

	</body>


</html>
