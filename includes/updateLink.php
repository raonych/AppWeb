<?php 
if(isset($_POST['event'])){
    $id = $_POST['event'];
}
echo "<div class='updateButton'>";
echo "<form action='index.php' method='get'>";
echo "<input type='hidden' name='event' value='$id'>";
echo "<input type='hidden' name='pagina' value='update'>";
echo '<button type="submit">';
        include 'static/svg/pen.html';
      '</button>';
echo "</form>";
echo "</div>";
?>
