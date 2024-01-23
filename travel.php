<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rico | Website</title>
</head>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Poppins', sans-serif;
}
.body{
    width: 100%;
    height: 90vh;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-size: cover;
}
header {
    background-color: #021c1e9d;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    float: right    ;
}
header h1 {
    margin: 0;
    margin-right: 1100px;
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
.heading{
    width: 30%;
    text-align: center;
    color: white;
}
.heading h1{
    font-size: 40px;
    padding-top: 10%;
}
.heading a{
    text-decoration: none;
    color: white;
    font-size: 25px;
    font-weight: bold;
    border-radius: 45px;
    padding: 14px 50px;
    background-color: #021c1e;
}
.heading a:hover{
    letter-spacing: 3px;
    transition: 0.6s;
}
.tours{
    width: 70%;
    display: flex;
    justify-content: space-around;
}
.places{
    display: inline;
    text-align: center;
    border-radius: 12px;
}
.places h2{
    color: #2c7873;
    font-size: 35px;
    letter-spacing: 3px;
    border-radius: 1px;
    padding: 30px 30px;
    background-color: #021c1e;
    font-weight: 30px;
}
.places a{
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 18px;
    border-radius: 12px;
    padding: 12px 30px;
    background-color: #6fb98f;
}
.places a:hover{
    background-color: #021c1e;
    letter-spacing: 3px;
    transition: 0.6s;
}
.footer{
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background: #6fb98f;
}
.footer a{
    text-decoration: none;
    color: #021c1e;
    font-size: 18px;
    font-weight: bold;
}
.footer a:hover{
    text-decoration: underline;
    transition: 0.4s;
}

</style>




<header>
    <h1>ECO BOOK TRAVEL</h1>
    <ul>
     <li class="active"><a href="flight.php">BOOK</a> </li>
     <li><a href="travel.PHP">TRAVEL</a></li>
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

<body>
    


   
    
    <div class="body">
        <div class="heading">
            <h1>Travel With Us</h1>
            <br>
            <p>Traveling can provide numerous benefits, including the opportunity to broaden one's horizons, learn new languages and customs, gain new perspectives, and create lasting memories.</p>
            <br>
            <br>
            <a href="Rico Jhon Billena _ Facebook.html">Learn More</a>
        </div>
        <div class="tours">
            <div class="places">
                <h2>UK</h2>
                <img src="images/uk.jpg" style="width: 300px; height: 250px;">
                <br>
                <br>
                <a href="flight.php">Book Now 20% OFF</a>
            </div>
            <div class="places">
                <h2>CANADA</h2>
                <img src="images/canada.jpg" style="width: 300px; height: 250px;">
                <br>
                <br>
                <a href="flight.php">Book Now 15% OFF</a>
            </div>
            <div class="places">
                <h2>AUSTRALIA</h2>
                <img src="images/austrilia.jpg" style="width: 300px; height: 250px;">
                <br>
                <br>
                <a href="flight.php">Book Now 10% OFF</a>
            </div>
        </div>
    </div>
    <div class="footer-content">
    <p>ECO BOOK TRAVEL © 2023 Travel Website</p>
    <div class="social-media">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    </div>
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