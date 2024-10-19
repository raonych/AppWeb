<?php
require "db/dbConnect.php";
$res = mysqli_query($con, "select * from event");

if (mysqli_num_rows($res) > 0) {   
    while($event = mysqli_fetch_array($res)){
        
        $id = $event['eventId'];
        echo "<button id='$id' class='eventButton' onclick='myFunction(event)'>", $event['eventName'], " - ", $event['eventDate'];
        echo "</button>";
        echo "<div id='form$id' class='formDiv'>";
        echo "<input type='hidden' id='event' name='event' value='$id'>";
        echo "Nome do evento: ",$event['eventName'],"</br>";
        echo "Data do evento: ",$event['eventDate'],"</br>";
        if(isset($event['eventInit'])){echo "Horário de inicio: ", $event['eventInit'],"</br>";};
        if(isset($event['eventEnd'])){echo "Horário de conclusão: ",$event['eventEnd'],"</br>";};
        if(isset($event['eventDesc'])){echo "Descrição:",$event['eventDesc'],"</br>";};
        if(isset($eventRes['eventRes'])){echo "Responsável pelo evento:",$event['eventRes'],"</br>";};
        include "./includes/updateLink.php";
        include "./includes/deleteLink.php";
        echo '</div>';    
    }
} else {   
    echo '<h3>Nenhum evento cadastrado</h3>';
}



mysqli_close($con);
?>