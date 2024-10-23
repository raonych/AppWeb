<?php 
if(isset($_POST['event'])){
    $id = $_POST['event'];
}
echo "<div class='deleteButton'>";
echo "<form action='./controller/eventDelete.php' method='post'>";
echo "<input type='hidden' name='event' value='$id'>";
echo "<input type='hidden' name='pagina' value='delete'>";
echo '<button type="submit">';
     include 'static/svg/trashCan.html';
      '</button>';
echo "</form>";
echo "</div>"
?>
