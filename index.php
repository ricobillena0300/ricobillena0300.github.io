<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
    background-image: url("images/VROM.gif");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}
*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: transparent #3498db;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: black;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	cursor: pointer;
	border: 1px solid #3498db;
    background: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    border-radius: 5px;
}
button:hover{
	opacity: .7;
	background-color: skyblue;
	transition: 0.5s;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: black;
}
a:hover{
	opacity: .7;
}
button a{
	color: black;
	font-family: "montserrat";
	text-decoration: none;
}

header {
	margin-top: -24%;
    background-color: #021c1e9d;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
}
header h1 {
    margin: 0;
    margin-right: 1142px;
}
header ul {
    list-style: none;
    display: flex;
    align-items: center;
}
header ul li {
    margin-right: 15px;
    transition: transform 0.1s ease-in-out;
}
header ul li:hover {
    transform: scale(1.1);
}
header ul li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    transition: color 0.1s ease-in-out;
    position: relative;
    display: inline-block;
    float: right;
}
header ul li.active a {
    color: white;
}
header ul li a::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #ff0;
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.1s ease-in-out;
}

</style>

<header>
    <h1>ECO BOOK TRAVEL</h1>
    <ul>
     <li class="active"><a href="passenger1.php">BOOK</a> </li>
     <li><a href="travel1.PHP">TRAVEL</a></li>
     <li><a href="EVENTS1.php">EVENTS</a></li>
     <li><a href="index.php">login-sign up</a></li> 
              
    </ul>
    

</header>
<br>
<br>
<br>
<br>

<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label></label>
     	<input type="text" name="uname" placeholder="USER NAME"><br>

     	<label></label>
     	<input type="password" name="password" placeholder="PASSWORD"><br>

     	<button type="submit">Login</button>
		 <button type="submit"><a href="signup.php">Sign up</a></button>
    </form>
	
</body>
</html>