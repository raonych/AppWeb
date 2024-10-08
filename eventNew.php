<?php 

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "events";
if(isset($_POST['eventName'])){
    $eventName = $_POST['eventName'];
   
}
if(isset($_POST['eventDate'])){
    $eventDate = $_POST['eventDate'];

}
if(isset($_POST['eventInit'])){
    $eventInit = $_POST['eventInit'];
}

$con = mysqli_connect($host,$user,$pass,$db);
$response = mysqli_query(
    $con,
    "insert into event (eventName,eventDate,eventInit) VALUES ('$eventName', '$eventDate', '$eventInit')"
);

mysqli_close($con);
?>



