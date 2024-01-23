<?php 
include ('connect.php');
if(isset($_POST['submit'])){
    $passenger_id= $_POST['passenger_id'];
    $passenger_fname= $_POST['passenger_fname'];
    $passenger_lname= $_POST['passenger_lname'];
    $passenger_mname= $_POST['passenger_mname'];
    $passenger_email= $_POST['passenger_email'];
    $passenger_payment= $_POST['passenger_payment'];
    $passenger_phone= $_POST['passenger_phone'];

    $sql= "INSERT INTO passenger (passenger_id, passenger_fname, passenger_lname, passenger_mname, passenger_email, passenger_payment, passenger_phone) VALUES ('$passenger_id', '$passenger_fname', '$passenger_lname', '$passenger_mname', '$passenger_email', '$passenger_payment', '$passenger_phone')";
    $result=mysqli_query($con,$sql);
    header("location:EVENTS1.php");
    if($result){
        echo "Data inserted seccessfully";
    }
    else{
        die(mysqli_error($con));

    }

}
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
button {
	background: #555;
	padding: 10px 15px;
	color: black;
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

<<body>
    
    <section class="contact-us">
     <h1>travel</h1>
     <div><h2>Passenger  Form</h2></div>

     <form method="POST">
     <label for="passenger_id"></label>
        <input type='text' name='passenger_id' id="passenger_id" required placeholder="PASSENGER ID"> <br> <br><br>

        <label for="passenger_fname"></label>
        <input type='text' name='passenger_fname' id="passenger_fname" required placeholder="PASSENGER FIRST NAME"> <br> <br><br>

        <label for="passenger_lname"></label>
        <input type='text' name='passenger_lname' id="passenger_lname" required placeholder="PASSENGER LAST NAME"> <br> <br><br>

        <label for="passenger_mname"></label>
        <input type='text' name='passenger_mname' id="passenger_mname" required placeholder="PASSENGER MIDDLE NAME"> <br> <br><br>

        <label for="passenger_email"></label>
        <input type='text' name='passenger_email' id="passenger_email" required placeholder="PASSENGER EMAIL"> <br> <br><br>

        <label for="passenger_payment"></label>
        <input type='text' name='passenger_payment' id="passenger_payment" required placeholder="PASSENGER payment"> <br> <br><br>

        <label for="passenger_phone"></label>
        <input type='text' name='passenger_phone' id="passenger_phone" required placeholder="PASSENGER PHONE"> <br> <br><br>
        

        <button type="submit" name='submit' id="submit">SUBMIT</button>
     </form>

    </section>


</body>
</html>
<?php 
}else{
	header("Location: flight.php");
	exit();
}
?>