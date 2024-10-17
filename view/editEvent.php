<?php 
    if(isset($_POST)){
        $pagina = $_POST['pagina'];
    }
    $id = $_POST['event'];
    switch ($pagina) {
        case 'update': $link = '../static/css/editForm.css'; break;
        
        break;
        
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo $link?>>
    <title>Edição</title>
</head>
<body>
    <?php  
    switch ($pagina) {
        case 'update': include '../includes/updateEvent.php'; break;
        default: include '../contoller/displayEvent.php'; 
        break;
        
    }
?>
</body>
</html>