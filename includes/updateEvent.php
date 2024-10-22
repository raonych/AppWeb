<?php
require "db/dbConnect.php";
if(isset($_GET['event'])){
    $id = $_GET['event'];
}
$res = mysqli_query($con, "SELECT * FROM event WHERE eventId = $id");
$event = mysqli_fetch_array($res);

echo '<form class="contentInput" action="controller/eventUpdate.php" method="post">';

echo '<label for="eventName">Nome do Evento:</label>';
echo '<input type="text" name="eventName" value="',$event['eventName'] ,'">';

echo '<label for="eventDate">Data:</label>';
echo '<input type="date" name="eventDate" value="',$event['eventDate'] ,'">';

echo '<label for="eventInit">Horário de Início:</label>';
echo '<input type="time" name="eventInit" value="',$event['eventInit'] ,'">';

echo '<label for="eventEnd">Horário de Conclusão:</label>';
echo '<input type="time" name="eventEnd" value="',$event['eventEnd'] ,'">';

echo '<label for="eventDesc">Descrição:</label>';
echo '<textarea class="input-desc" type="text" name="eventDesc"','">',$event['eventDesc'],'</textarea>';

echo '<label for="eventRes">Responsável pelo Evento:</label>';
echo '<input type="text" name="eventRes" value="',$event['eventRes'] ,'">';

echo "<input type='hidden' name='event' value='$id'>";

echo '<button type="submit">Salvar alterações</button>';
echo '</form>';

mysqli_close($con);
?>

