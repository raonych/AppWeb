<?php 
require "../db/dbConnect.php";

require "../includes/pullEvents.php";

$response = mysqli_query(
    $con,
    "insert into event (eventName,eventDate,eventInit,eventEnd,eventDesc,eventRes) 
    VALUES ('$eventName', '$eventDate', '$eventInit','$eventEnd','$eventDesc','$eventRes')"
);
echo "Evento Cadastrado";
include "../includes/homeLink.php";
mysqli_close($con);
?>



