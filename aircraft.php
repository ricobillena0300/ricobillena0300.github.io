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
	/* Reset Styles */
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
*{
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
        font-family: "poppins", sans-serif;
    }
    .btn{
        padding: 10px 60px;
        background: #fff;
        border: 0;
        outline: none;
        cursor: pointer;
        font-size: 22px;
        font-weight: 500;
        border-radius: 30px;
    }
    .popup{
        width: 400px;
        background: #fff;
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 38%;
        transform: translate(-50%, -50%)(scale(0.1));
        text-align: center;
        padding: 0 30px 30px;
        color: #333;
        visibility: hidden;
        transition: trasnform 1s, top 1s;
    }
    .open-popup{
        visibility: visible;
        top: 20%;
        transform: translate(-50%, -50%)(scale(1));
    }
    .popup img{
        width: 100px;
        margin-top: -50px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .popup h2{
        font-size: 38px;
        font-weight: 500;
        margin: 30px 0 10px;

    }
    .popup P1{
        font-size: 30px;
        font-weight: bold;
    }
    .popup button{
        width: 100%;
        margin-top: 50px;
        padding: 10px 0;
        background: #6fd649;
        color: #fff;
        border: 0;
        outline: none;
        font-size: 18px;
        border-radius: 4%;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
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
    <br>
    <br>
    <br>
    <br>

    
    <section class="contact-us">
     <h1>travel</h1>
     <div><h2>Aircraft  Form</h2></div>
     <form action='connect.php' method="POST">

        <label for="aircraft_id"></label>
        <input type='text' name='aircraft_id' id="aircraft_id" required placeholder="AIRCRAFT ID"> <br> <br><br>

        <label for="aircraft_totalseat"></label>
        <input type='text' name='aircraft_totalseat' id="aircraft_totalseat" required placeholder="AIRCRAFT TOTAL SEAT"> <br> <br><br>
        

        <div class="container1">
        <button type="button" class="btn" onclick="openPopup()">submit</button>
        <div class="popup" id="popup">
            <img src="images/popup.png">
            <h2>Thank You</h2>
            <p>Your datails has been succesfully Submitted. Thanks!</p><br>
            <p1>Have a safe Travel!</p1>
            <button type="submit" class="btn" name='submit' id="submit" onclick="closePopup()">Ok</button>
        </div>

     </form>
    

    </div>
    <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup")
        }
        function closePopup(){
            popup.classList.remove("open-popup")
        }
    </script>

    </section>
    

</body>
</html>
<?php 
}else{
	header("Location: aircraft.php");
	exit();
}
?>