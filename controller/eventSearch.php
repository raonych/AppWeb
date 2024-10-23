<?php 
require "db/dbConnect.php";
if(isset($_GET['search'])){
    $search = $_GET['search']; 
}
$response = mysqli_query(
    $con,
    "select * from event where eventName ='$search';"
);
echo '<div id="event-box" class="event-box">';
if (mysqli_num_rows($response) > 0) { 
while($event = mysqli_fetch_array($response)){
    $id = $event['eventId'];
    include "controller/displayEvent.php";
};

}else if(mysqli_num_rows($response) == 0){
    $res = mysqli_query(
        $con,
        "select * from event where eventName like '%$search%';"
    );
while($event = mysqli_fetch_array($res)){
    $id = $event['eventId'];
    include "controller/displayEvent.php";
};
}else{
    echo "<h3>Nenhum evento encontrado no banco de dados.</h3>";
}

echo '</div>';

mysqli_close($con);
?>



