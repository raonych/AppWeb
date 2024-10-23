<?php
function formatDate($date) {
    $formattedDate = date("d-m-Y", strtotime($date));
    return $formattedDate;
}
?>
