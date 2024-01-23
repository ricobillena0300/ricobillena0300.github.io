<?php
$con=new mysqli('localhost', 'root', '' , 'ricotest1');

if(!$con){
  die(mysqli_error($con));
}

?>



<!--flight form-->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'ricotest1') or die("Connection Failed:" .mysqli_connect_error());
      if(isset($_POST['flight_id']) && isset($_POST['flight_airline']) && isset($_POST['flight_number']) && isset($_POST['flight_departureairport']) && isset($_POST['flight_departuredatetime'])  && isset($_POST['flight_arrivaldatetime'])) {
        $flight_id= $_POST['flight_id'];
        $flight_airline= $_POST['flight_airline'];
        $flight_number= $_POST['flight_number'];
        $flight_departureairport= $_POST['flight_departureairport'];
        $flight_departuredatetime= $_POST['flight_departuredatetime'];
        $flight_arrivaldatetime= $_POST['flight_arrivaldatetime'];
  
        $sql= "INSERT INTO flight (flight_id, flight_airline, flight_number, flight_departureairport, flight_departuredatetime, flight_arrivaldatetime) VALUES ('$flight_id', '$flight_airline', '$flight_number', '$flight_departureairport', '$flight_departuredatetime', '$flight_arrivaldatetime')";
  
        $query = mysqli_query($conn,$sql);
        header("location:booking.php");
        if($query) {
         echo 'Entry Successfull';
        }
        else {
          echo 'Error Occurred';
        }
      }
  }
  

?>



<!--booking form-->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'ricotest1') or die("Connection Failed:" .mysqli_connect_error());
      if(isset($_POST['booking_id']) && isset($_POST['booking_passengerid']) && isset($_POST['booking_flightid']) && isset($_POST['booking_date']) && isset($_POST['booking_seatnumber'])) {
        $booking_id= $_POST['booking_id'];
        $booking_passengerid= $_POST['booking_passengerid'];
        $booking_flightid= $_POST['booking_flightid'];
        $booking_date= $_POST['booking_date'];
        $booking_seatnumber= $_POST['booking_seatnumber'];
  
        $sql= "INSERT INTO booking (booking_id, booking_passengerid, booking_flightid, booking_date, booking_seatnumber ) VALUES ('$booking_id', '$booking_passengerid', '$booking_flightid', '$booking_date', '$booking_seatnumber')";
  
        $query = mysqli_query($conn,$sql);
        header("location:airport.php");
        if($query) {
         echo 'Entry Successfull';
        }
        else {
          echo 'Error Occurred';
        }
      }
  }
  

?>



<!--airport form-->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'ricotest1') or die("Connection Failed:" .mysqli_connect_error());
      if(isset($_POST['airport_code'])  && isset($_POST['airport_name'])  && isset($_POST['airport_location'])) {
        $airport_code= $_POST['airport_code'];
        $airport_name= $_POST['airport_name'];
        $airport_location= $_POST['airport_location'];
  
        $sql= "INSERT INTO airport (airport_code, airport_name, airport_location) VALUES ('$airport_code', '$airport_name', '$airport_location')";
  
        $query = mysqli_query($conn,$sql);
        header("location:aircraft.php");
        if($query) {
         echo 'Entry Successfull';
        }
        else {
          echo 'Error Occurred';
        }
      }
  }
  

?>

<!--aircraft form-->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'ricotest1') or die("Connection Failed:" .mysqli_connect_error());
      if(isset($_POST['aircraft_id'])  && isset($_POST['aircraft_totalseat'])) {
        $aircraft_id= $_POST['aircraft_id'];
        $aircraft_totalseat= $_POST['aircraft_totalseat'];
  
        $sql= "INSERT INTO aircraft (aircraft_id, aircraft_totalseat) VALUES ('$aircraft_id', '$aircraft_totalseat')";
  
        $query = mysqli_query($conn,$sql);
        header("location:EVENTS.php");
        if($query) {
         echo 'Entry Successfull';
        }
        else {
          echo 'Error Occurred';
        }
      }
  }
  

?>







<!---sign up form-->
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'ricotest1') or die("Connection Failed:" .mysqli_connect_error());
      if(isset($_POST['user_name']) && isset($_POST['name']) && isset($_POST['password'])) {
        $user_name= $_POST['user_name'];
        $name= $_POST['name'];
        $password= $_POST['password'];


        $sql= "INSERT INTO login (user_name, name, password) VALUES ('$user_name', '$name', '$password')";
  
        $query = mysqli_query($conn,$sql);
        header("location:index.php");
        if($query) {
         echo 'Entry Successfull';
        }
        else {
          echo 'Error Occurred';
        }
      }
  }
?>





