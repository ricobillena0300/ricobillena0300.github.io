<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
<!DOCTYPE html>
<html>
<head>
	<title>EVENTS</title>
	<link rel="stylesheet" href="events.css">
</head>
<style>
	/* Reset Styles */
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Poppins', sans-serif;
	text-decoration: none;
	color: white;
}
header h1{
    color: white;
}
.hero {
	background-size: cover;
	background-position: center;
	height: 500px;
	display: flex;
	align-items: center;
	justify-content: center;
}

.hero-content {
	text-align: center;
}

.hero h1 {
	font-size: 48px;
	margin-bottom: 20px;
    color: white;
}

.hero p {
	font-size: 24px;
	margin-bottom: 30px;
    color: white;
}

.btn {
	display: inline-block;
	padding: 10px 20px;
	background-color: #021c1e;
	border-radius: 5px;
	transition: background-color 0.3s ease;
    color: white;
}

.btn:hover {
	background-color: skyblue;
}

.destinations {
	padding: 50px 0;
}

.destinations h2 {
	text-align: center;
	font-size: 36px;
	margin-bottom: 30px;
}

.destination-grid {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-gap: 30px;
}

.destination-item {
	border: 1px solid #ccc;
	padding: 20px;
	text-align: center;
	border-radius: 20px;
}

.destination-item img {
	max-width: 100%;
	margin-bottom: 20px;
}

.destination-item h3 {
	font-size: 24px;
	margin-bottom: 10px;
    color: white;
}

.destination-item a {
	display: inline-block;
	padding: 10px 20px;
	border-radius: 5px;
	margin-top: 20px;
	transition: background-color 0.3s ease;
    color: white;
    cursor: pointer;
    box-sizing: border-box;
    transition: background-color 0.3s ease;
}

.destination-item a:hover {
	background-color: #021c1e;
}

.about-us {
	padding: 50px 0;
	text-align: center;
}

.about-us h2 {
	font-size: 36px;
	margin-bottom: 30px;
}

.about-us p {
	font-size: 18px;
	max-width: 600px;
	margin: 0 auto;
	line-height: 1.8;
}

.contact-us {
	padding: 50px 0;
	text-align: center;
}

.contact-us h2 {
	font-size: 36px;
	margin-bottom: 30px;
}

.contact-us form {
	max-width: 500px;
	margin: 0 auto;
    background-color: #021c1e9d;
    border-radius: 20px;
}

.contact-us label {
	display: block;
	margin-bottom: 10px;
	font
}
button {
	background: #555;
	padding: 10px 15px;
	color: white;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
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
header {
    background-color: #021c1e9d;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header h1 {
    margin: 0;
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
header ul li a:hover::before {
    visibility: visible;
    transform: scaleX(1);
}

header ul li:last-child {
    margin-right: 0;
    }

    header ul li.logout {
    margin-left: auto;
}
</style>




<body>
    <header>
        <h1>ECO BOOK TRAVEL</h1>
        <ul>
            <li class="active"><a href="flight.php">BOOK</a> </li>
            <li><a href="travel.php">TRAVEL</a> </li>
            <li><a href="EVENTS.php">EVENTS</a></li>
			<li><a href="passengerdocs.php">EDIT</a> </li>
			<li><a href="index.php">Logout</a></li>
			<li>Hello, <?php echo $_SESSION['name']; ?></li> 


        </ul>
    </header>
 <br>
 <br>
 <br>
 <br>









	
	<section class="hero">
		<div class="hero-content">
			<h1>YEARLY EVENTS</h1>
			<p>APPLY IN OUR YEARLY EVENTS TO SAVE MORE.</p>
			<a href="login.php" class="btn">Home</a>
		</div>
	</section>
	<section class="destinations">
		<h2>Featured Destinations</h2>
		<div class="destination-grid">
			<div class="destination-item"><P>PHILIPPINES</P>
				<img src="images/PHILIPPINES.jpg" width="400px" height="250" alt="Destination 1">
				<h3>Destination 1
				<a href="KAYANGAN.html">Let's go to exciting trip to Kayangan Lake | Coron Philippines</a></h3>
			</div>
			<div class="destination-item"><p>JAPAN</p>
				<img src="images/japan.png" width="400px" height="250" alt="Destination 2">
				<h3>Destination 2
				<a href="japan.html">Himeji Castle is one of the most important tourist attractions in Japan</a></h3>
			</div>
			<div class="destination-item"><p>TRANSIVINIA</p>
				<img src="images/transivinia.jpg" width="400px" height="250px" alt="Destination 3">
				 <h3>Destination 3
				 <a href="transivinia.html">Vampiric trip to Transilvania: the castle of Dracula</a></h3>
			</div>
			<div class="destination-item"><p>ENGLAND</p>
				<img src="images/dover.jpg" width="400px" height="250px" alt="Destination 4">
				<h3>Destination 4<br>
				<a href="england.html">The mesmerizing sight of White Cliffs of Dover in england</a></h3>
			</div>
		</div><br>
        <br>
        <br>
		<center><a href="#" class="btn">View All Destinations</a></center>
	</section>
	<section class="about-us">
		<h2>About Us</h2>
		<p>We are a team of travel enthusiasts who want to help you discover the world. Our goal is to provide you with the best travel recommendations and tips to make your trips unforgettable.</p>
	</section>
	<section class="contact-us">
		<h2>Contact Us</h2>
		<form>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>

			<label for="message">Message</label>
			<textarea id="message" name="message" required></textarea><br>

			<button type="submit" value="Send" name='submit' id="submit">SUBMIT</button>
		</form>
	</section>
	<footer>
        
	</footer>
    <style>
        body {
          background-image: url("images/VROM.gif");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
        </style>
</body>
</html>
<?php 
}else{
	header("Location: travel.php");
	exit();
}
?>