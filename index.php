<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planner</title>
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="static/css/styleCalendar.css">
</head>
<a class="event-new" href="view/eventForm.html">Novo evento</a>
<body>
<h1 id="monthHeader" class="monthHeader"></h1>
<div class="calendar" id="calendar"></div>
 <div id="event-box" class="event-box">
<?php 
require "controller/listEvents.php";
?>
</div>
<script src="static/js/main.js"></script>
</body>
</html>
  