<?php
require "db/dbConnect.php";
include "includes/formatDate.php"; 
$res = mysqli_query($con, "select * from event");
echo '<div id="event-box" class="event-box">';

if (mysqli_num_rows($res) > 0) {   
    while($event = mysqli_fetch_array($res)){
        
        $id = $event['eventId'];
        $formattedDate = formatDate($event['eventDate']);
        echo "<button id='$id' class='eventButton' onclick='myFunction(event)'>", $event['eventName'], " - ", $formattedDate;
        echo "</button>";
        echo "<div id='form$id' class='formDiv'>";
        echo "<h2>",$event['eventName'],"</h2>";
        echo "<p>Data do evento: ", $formattedDate, "</p>"; 

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
    }
} else {   
    echo '<h3>Nenhum evento cadastrado</h3>';
}

echo '</div>';
mysqli_close($con);
?>
