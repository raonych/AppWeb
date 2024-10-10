<?php 

require "../db/dbConnect.php";
$eventId = $_POST['event'];

$response = mysqli_query(
    $con,
    "delete from event where eventId = $eventId"
);

$res = mysqli_query(
    $con,
    "select * from event"

);

echo "Evento deletado";


mysqli_close($con);
?>



