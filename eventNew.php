<?php 

$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "events";
if(isset($_POST['eventId'])){
    $eventId = $_POST['eventID'];
   
}
if(isset($_POST['eventName'])){
    $eventName = $_POST['eventName'];

}
if(isset($_POST['eventDate'])){
    $eventDate = $_POST['eventDate'];
}



$con = mysqli_connect($host,$user,$pass,$db);
$response = mysqli_query($con, "insert into event (eventID,eventName,eventDate) VALUES ($eventId, '$eventName', '$eventDate')");

mysqli_close($con);
?>



