<?php
echo '<div >';
echo "<form class='searchBar' action='index.php' method='get'>";
echo "<input type='hidden' name='pagina' value='search'>";
echo '<input name="search" type="text"/> <button type="submit">';
include 'static/svg/lupe.html';
echo '</button>';
echo '</form>';
echo '</div>';