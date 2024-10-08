<?php
require "db/dbConnect.php";
$res = mysqli_query($con, "select * from event");

if (mysqli_num_rows($res) > 0) {   
    while($event = mysqli_fetch_array($res)){
        echo '<form action="controller/displayEvent.php" method="post" >';
        $id = $event['eventId'];
        echo "<button type='submit'>", $id, " - ", $event['eventName'], " - ", $event['eventDate'], " - ", $event['eventInit'], " - ", $event['eventEnd'], " - ", $event['eventDesc'], " - ", $event['eventRes'];
        echo "</button>";
        echo "<input type='hidden' name='event' value='$id'>";
        include "includes/updateLink.php";
        echo '</form>';    
    }
} else {   
    echo '<h3>Nenhum evento cadastrado</h3>';
}



mysqli_close($con);
?>