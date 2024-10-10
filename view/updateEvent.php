<?php
require "../db/dbConnect.php";
$id = $_POST['event'];
$res = mysqli_query($con, "select * from event where eventId = $id");
$event = mysqli_fetch_array($res);

echo '<form action="../controller/eventUpdate.php"method="post"> ';
echo '<input type="text" name="eventName" value="',$event['eventName'] ,'"></input>';
echo '<input type="date" name="eventDate" value="',$event['eventDate'] ,'"></input>';
echo '<input type="time" name="eventInit" value="',$event['eventInit'] ,'"></input>';
echo '<input type="time" name="eventInit" value="',$event['eventEnd'] ,'"></input>';
echo '<input type="text" name="eventInit" value="',$event['eventDesc'] ,'"></input>';
echo '<input type="text" name="eventInit" value="',$event['eventRes'] ,'"></input>';
echo "<input type='hidden' name='event' value='$id'>";

echo '<button type="submit">Salvar alterações</button>';
echo '</form>';


mysqli_close($con);
?>







