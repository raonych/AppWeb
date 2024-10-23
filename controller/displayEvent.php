<?php
/*require "../db/dbConnect.php";
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
mysqli_close($con); */
$id = $event['eventId'];
        echo "<button id='$id' class='eventButton' onclick='myFunction(event)'>", $event['eventName'], " - ", $event['eventDate'];
        echo "</button>";
        echo "<div id='form$id' class='formDiv'>";
        echo "<h2>",$event['eventName'],"</h2>";
        echo "<p>Data do evento: ",$event['eventDate'],"</p>";

        if(isset($event['eventInit']) && $event['eventInit'] != '00:00:00'){
            echo "<p>Horário de inicio: ", $event['eventInit'],"</p>";
        }

        if(isset($event['eventEnd']) && $event['eventEnd'] != '00:00:00'){
            echo "<p>Horário de conclusão: ",$event['eventEnd'],"</p>";
        }

        if(isset($event['eventDesc']) && $event['eventDesc'] != null){
            echo "<div class='eventDesc'>Descrição: ",$event['eventDesc'],"</div>";
        }

        if(isset($event['eventRes']) && $event['eventRes'] != null){
            echo "<p>Responsável pelo evento: ",$event['eventRes'],"</p>";
        }

        include "./includes/updateLink.php";
        include "./includes/deleteLink.php";
        echo "<button id='$id' class='closeWindow' onclick='myFunction(event)'>X</button>";
        echo "</div>";

?>
