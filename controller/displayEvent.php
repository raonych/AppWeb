<?php
require "../db/dbConnect.php";
$id = $_POST['event'];
$res = mysqli_query($con, "select * from event where eventId = $id");

while($event = mysqli_fetch_array($res)){
    echo $event['eventId'],"</br>";
    echo $event['eventName'],"</br>";
    echo $event['eventDate'],"</br>";
    echo $event['eventInit'],"</br>";
    echo $event['eventEnd'],"</br>";
    echo $event['eventDesc'],"</br>";
    echo $event['eventRes'],"</br>";
}

include "../includes/updateLink.php";
include "../includes/homeLink.php";
mysqli_close($con);
?>
