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
        case 'search': include "controller/eventSearch.php"; break;
        case 'home': include "controller/listEvents.php"; break;
        
        
    }

?>
</div>
<script src="static/js/main.js"></script>
</body>
</html>
  
