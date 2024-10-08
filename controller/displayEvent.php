<?php
require "../db/dbConnect.php";
$id = $_POST['event'];
$res = mysqli_query($con, "select * from event where eventId = $id");

while($event = mysqli_fetch_array($res)){
    echo $event['eventId']," ", $event['eventName']," ",$event['eventDate'],$event['eventInit'],$event['eventEnd'],$event['eventDesc'],$event['eventRes'],"</br>";
}

include "../includes/updateLink.php";
mysqli_close($con);
?>
