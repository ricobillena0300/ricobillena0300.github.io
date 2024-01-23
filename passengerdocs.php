<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Table</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none
}      
body {
    background-image: url("images/VROM.gif");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100vh;
}
.contact-us{
    margin-top: 150px;
    position: relative;
    background: transparent;
    border-radius: 1px solid #fff;
    border-top-left: 20px;
    border-bottom-right: 20px;
    color: white;

}
table {
    width: 75%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: transparent 100px ;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    font-weight: bold;
    color: white;
    font-size: 20px;
    background-color: #021c1e9d;
}
.btn{
    border: 1px solid #3498db;
    background: skyblue;
    padding: 3px 3px;
    font-size: 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    border-radius: 5px;
}
.btn :hover{
    color: black;
    transition: 0.1s;
    background-color: white;
}
button .btn{
    color: white;
}
th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #ddd;
}

</style>
</head>


<body><CENTER>

<div class="contact-us">
    <h1>PASSENGER LIST</h1>
    <!--update links to other form--->
     <button class="btn btn-primary my-5"><a href="flight.php"class="text-light">ADD USER</a></button>

    

                
        <table>
            <thead>
                <tr>
                 <th scope="col">ID</th>
                 <th scope="col">Firs_Name</th>
                 <th scope="col">Last_Email</th>
                 <th scope="col">Middle_Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">payment</th>
                 <th scope="col">Phone</th>
                </tr>
            </thead>
            
            <tbody>
            <?php
                $sql = "SELECT  *FROM passenger";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                     $passenger_id=$row["passenger_id"];
                        $passenger_fname=$row["passenger_fname"];
                        $passenger_lname=$row["passenger_lname"];
                        $passenger_mname=$row["passenger_mname"];
                        $passenger_email=$row["passenger_email"];
                        $passenger_payment=$row["passenger_payment"];
                        $passenger_phone=$row["passenger_phone"];
                        echo '<tr>
                        <td scope="row">'.$passenger_id.'</td>
                        <td>'.$passenger_fname.'</td>
                        <td>'.$passenger_lname.'</td>
                        <td>'.$passenger_mname.'</td>
                        <td>'.$passenger_email.'</td>
                        <td>'.$passenger_payment.'</td>
                        <td>'.$passenger_phone.'</td>
                        <td>
                        <button class="btn btn=primary"><a href="update.php? updateid='.$passenger_id.' class="text-light">Update</a></button>
                        <button class="btn btn=danger"><a href="delete.php? deleteid='.$passenger_id.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }
            
            ?>
            



            
            </tbody>
        </table>
    
    
</div>
</body></CENTER>
</html>
