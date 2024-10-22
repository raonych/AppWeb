<?php 
require "../db/dbConnect.php";
if(isset($_POST['search'])){
    $search = $_POST['search']; 
}
$response = mysqli_query(
    $con,
    "select * from event where eventName ='$search';"
);

$res = mysqli_query(
    $con,
    "select * from event where eventName like '%$search%';"
);


while($eventSearchEqual = mysqli_fetch_array($response)){
    echo $eventSearchEqual['eventName'];
    echo "</br>";
};

if($res != $response){
while($eventSearchLike = mysqli_fetch_array($res)){
    echo $eventSearchLike['eventName'];
};
}
mysqli_close($con);
?>



