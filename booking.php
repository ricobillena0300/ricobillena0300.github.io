<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>

body {
    background-image: url("images/VROM.gif");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
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
	color: white;
}
.contact-us input{
    color: black;
    margin-top: 10px;
    width: 50%;
    height: 35px;
    border-radius: 10px;
    font-weight: bold;
    font-size: 15px;
    background-color: white;

}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Poppins', sans-serif;
}
header h1{
    color: white;
}
header ul li {
    float: right;
    margin: 0 8px   ;
    display: inline-block;
    list-style: none;
    margin-top: -18px;
    

}
header ul li a{
    color: white;
    padding-top: 5%;
    padding-bottom: 5%;
    padding-left: 5%;
    padding-right: 5%;
    font-weight: bold;
    
}
button {
	background: #555;
	padding: 10px 15px;
	color: white;
	border-radius: 5px;
	margin-right: 8px;
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

<body>
    
    <section class="contact-us">
     <h1>travel</h1>
     <div><h2>Booking Form</h2></div>
     <form action='connect.php' method="POST">

        <tr>
         <BR>
           <BR>
          <label for="booking_id"></label>
          <input type='text' name='booking_id' id="booking_id'" required placeholder="BOOKING ID"> <br> <br><br>

         <label for="booking_passengerid"> </label>
         <input type='text' name='booking_passengerid' id="booking_passengerid" required placeholder="PASSENGER ID"> <br> <br><br>

         <label for="booking_flightid"> </label>
         <input type='text' name='booking_flightid' id="booking_flightid" required placeholder="FLIGHT ID"> <br> <br><br>

         <label for="booking_date"></label>
         <input type='text' name='booking_date' id="booking_date" required placeholder="BOOKING DATE"> <br> <br><br>

         <label for="booking_seatnumber"> </label>
         <input type='text' name='booking_seatnumber' id="booking_seatnumber" required placeholder="SEAT NUMBER"> <br> <br><br>        

         <button type="submit" name='submit' id="submit">SUBMIT</button><BR> <BR>
        </tr>
        
     </form>

    </section>


</body>
</html>
<?php 
}else{
	header("Location:airport.php");
	exit();
}
?>