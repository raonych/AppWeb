<?php 

require "../db/dbConnect.php";
$eventId = $_POST['event'];
require "../includes/pullEvents.php";

$link = "../static/css/displayUpdate";
$response = mysqli_query(
    $con,
    "update event set eventName = '$eventName', eventDate = '$eventDate', eventInit = ' $eventInit', eventEnd = '$eventEnd', eventDesc = '$eventDesc', eventRes = '$eventRes' where eventId = $eventId; "
);

$res = mysqli_query(
    $con,
    "select * from event where eventId = $eventId"

);
while($event = mysqli_fetch_array($res)){
    echo $event['eventId']," ", $event['eventName']," ",$event['eventDate'],$event['eventInit'],$event['eventEnd'],$event['eventDesc'],$event['eventRes'],"</br>";
}


include "../includes/homeLink.php";
mysqli_close($con);
?>



