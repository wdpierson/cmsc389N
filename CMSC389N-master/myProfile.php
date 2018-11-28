<html>
	<head>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title>Flint</title>
		<!DOCTYPE html>
<html>
<head>
<style>	
.small{
	height: 5%;
	width: 9%;
}

#logo { 
	height: 5%;
	width: 3%;
	float: right;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}


li a {
	float: left;
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: red;
}

</style>
</head>
<body>

<ul>
  <li><a href="feed.php">Home</a></li>
  <li><a class="active" href="myProfile.php">My Profile</a></li>
  <li><a href="chat.php">Chats</a></li>
  <li><img src="logo.png" class='small' id='logo'></li>
</ul>
<div class = "container-fluid">
	<form action = "" method = "post" class = "form-horizontal">
		<!-- First Name -->
		<div class = "form-group">
			<label class = "control-label col-sm-2 col-sm-pull-1">First Name:</label>
			<div class = "col-sm-4 col-sm-pull-1">
				<input type = "text" id = "firstName" class = "form-control" placeholder = "Richard" required>
			</div>
			
			<!-- Last Name -->
			<label class = "control-label col-sm-2 col-sm-pull-1">Last Name:</label>
			<div class = "col-sm-4 col-sm-pull-1">
				<input type = "text" id = "lastName" class = "form-control" placeholder = "Johnson" required>
			</div>
		</div>
		
		<div class = "form-group">
			<!-- Location -->
			<label class = "control-label col-sm-2 col-sm-pull-1">Location:</label>
			<div class = "col-sm-4 col-sm-pull-1">
				<input type = "text" id = "location" class = "form-control" placeholder = "College Park" required>
			</div>
			<!-- Age -->
			<label class = "control-label col-sm-2 col-sm-pull-1">Age:</label>
			<div class = "col-sm-1 col-sm-pull-1">
				<input type = "number" id = "age" class = "form-control" placeholder = "20" required>
			</div>
			<!-- Gender -->
			<div>
				<label class = "control-label col-sm-pull-1">Gender:</label> 
				<label>M</label>
				<input type="radio" id="genderM" name="defaultExampleRadios">	
				<label>F</label>
				<input type="radio" id="genderF" name="defaultExampleRadios">
			</div>
		</div>
		
		<!-- Bio -->
		<div class = "form-group">
			<label class = "control-label col-sm-1">Bio:</label>
			<div>
				<textarea class = "col-sm-10" rows = "8" id = "Bio"></textarea>
			</div>
		</div>
		
		<!-- Interests -->
		<div class = "form-group">
			<label class = "control-label col-sm-1">Interests:</label>
			<div>
				<textarea class = "col-sm-10" rows = "8" id = "interests"></textarea>
			</div>
		</div>
		
		<!-- Submit Changes Button -->
		
	</form>
</div>

</body>
</html>
