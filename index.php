<?php 
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }else{
      $pagina = 'home';
    };
    
?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planner</title>
  <link rel="stylesheet" href="static/css/main.css">
</head>
<a class="event-new" href="?pagina=new">Novo evento</a>
<body>
<?php  
    switch ($pagina) {
        case 'update': include 'includes/updateEvent.php'; break;
        case 'new': include 'view/eventForm.html'; break;
        case 'home': include "controller/listEvents.php"; break;
        
        
    }
?>
</div>
<script src="static/js/main.js"></script>
</body>
</html>
  