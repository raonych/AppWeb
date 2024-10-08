<?php 

require "../db/dbConnect.php";
$eventId = $_POST['event'];

if(isset($_POST['eventName'])){
    $eventName = $_POST['eventName'];
   
}
if(isset($_POST['eventDate'])){
    $eventDate = $_POST['eventDate'];

}
if(isset($_POST['eventInit'])){
    $eventInit = $_POST['eventInit'];
}

$con = mysqli_connect($host,$user,$pass,$base);
$response = mysqli_query(
    $con,
    "update event set eventName = '$eventName', eventDate = '$eventDate', eventInit = ' $eventInit' where eventId = $eventId; "
);

$res = mysqli_query(
    $con,
    "select * from event where eventId = $eventId"

);
while($event = mysqli_fetch_array($res)){
    echo $event['eventId']," ", $event['eventName']," ",$event['eventDate'],$event['eventInit'],$event['eventEnd'],$event['eventDesc'],$event['eventRes'],"</br>";
}



mysqli_close($con);
?>



