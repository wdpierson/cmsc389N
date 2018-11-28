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
.wrapper
{
    width:90%;
    height:90%;
    position:relative;
}

.arrow
{
    width:10px;
    height:10px;
    position:absolute;
    right:0px;
    bottom:0px;
}
textarea{
    font-size: 20px;
    position:fixed;
    bottom:0;
    left:0;
    width:90%;
    height:60px;
}
button {
    position:fixed;
    bottom:0;
    right:0;
    width: 10%;
    height: 60px;
}
.chatBubble {
    overflow: auto;
    font-size: 24px;
    background-color: dodgerblue;
    border-color: white;
    border-style: groove, medium;
    border-radius: 100px;
    text-align: center;
    padding-right: 15px;
    padding-left: 15px;
}
</style>
</head>
<body>

<ul>
  <li><a href="feed.php">Home</a></li>
  <li><a href="myProfile.php">My Profile</a></li>
  <li><a class="active" href="chat.php">Chats</a></li>
  <li><img src="logo.png" class='small' id='logo'></li>
</ul>

<h3 style="text-align: center"> Now chatting with <script>var oldURL = document.referrer;</script> CHANGE THIS</h3>


<div id='text'></div>

<textarea id='chatInput' onkeypress="onEnter(event, this)"></textarea>
<button onclick='send()' id='send'>Send</button>
</body>
</html>

<script>
var chats = "";
function send() {
    chats += "<span class='chatBubble'>" + "    "+ document.getElementById("chatInput").value + "    " + "</span><br>";
    document.getElementById("text").innerHTML = chats + " <br>";
    document.getElementById("chatInput").value = "";
    return true;
}
function onEnter(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) {
        chats += "<span class='chatBubble'>" + "    "+ document.getElementById("chatInput").value + "    " + "</span><br>";
        document.getElementById("text").innerHTML = chats + " <br>";
        document.getElementById("chatInput").value = "";
        return true;
    }
}
</script>