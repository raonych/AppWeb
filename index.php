<?php 
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }else{
      $pagina = 'home';
    };
    
include 'includes/header.php';
 
    switch ($pagina) {
        case 'update': include 'includes/updateEvent.php'; break;
        case 'new': include 'view/eventForm.html'; break;
        case 'home': include "controller/listEvents.php"; break;
        
        
    }

    if(isset($searchResponse)){echo $searchResponse;};
?>
</div>
<script src="static/js/main.js"></script>
</body>
</html>
  