<?php
require "../db/dbConnect.php";

$res = mysqli_query($con, "SELECT * FROM event WHERE eventId = $id");
$event = mysqli_fetch_array($res);

$link = "../static/css/editForm";

echo '<form action="../controller/eventUpdate.php" method="post">';

echo '<label for="eventName">Nome do Evento:</label>';
echo '<input type="text" name="eventName" value="',$event['eventName'] ,'">';

echo '<label for="eventDate">Data:</label>';
echo '<input type="date" name="eventDate" value="',$event['eventDate'] ,'">';

echo '<label for="eventInit">Horário de Início:</label>';
echo '<input type="time" name="eventInit" value="',$event['eventInit'] ,'">';

echo '<label for="eventEnd">Horário de Conclusão:</label>';
echo '<input type="time" name="eventEnd" value="',$event['eventEnd'] ,'">';

echo '<label for="eventDesc">Descrição:</label>';
echo '<input type="text" name="eventDesc" value="',$event['eventDesc'] ,'">';

echo '<label for="eventRes">Responsável pelo Evento:</label>';
echo '<input type="text" name="eventRes" value="',$event['eventRes'] ,'">';

echo "<input type='hidden' name='event' value='$id'>";

echo '<button type="submit">Salvar alterações</button>';
echo '</form>';

mysqli_close($con);
?>

