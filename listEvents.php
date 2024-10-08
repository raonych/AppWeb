<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "events";
$con =  mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query($con, "select * from event");

if (mysqli_num_rows($res) > 0) {   
    while($event = mysqli_fetch_array($res)){
        echo '<form action="displayEvent.php" method="post" >';
        $id = $event['eventId'];
        echo "<button type='submit'>", $id, " - ", $event['eventName'], " - ", $event['eventDate'], " - ", $event['eventInit'], " - ", $event['eventEnd'], " - ", $event['eventDesc'], " - ", $event['eventRes'], "</button>";
        echo "<input type='hidden' name='event' value='$id'>";
        echo '</form>';    
    }
} else {   
    echo '<h3>Nenhum evento cadastrado</h3>';
}

mysqli_close($con);
?>