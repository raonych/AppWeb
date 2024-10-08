<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php
$id = $_POST['event'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "events";
$con =  mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query($con, "select * from event where eventId = $id");

while($event = mysqli_fetch_array($res)){
    echo $event['eventId']," ", $event['eventName']," ",$event['eventDate'],$event['eventInit'],$event['eventEnd'],$event['eventDesc'],$event['eventRes'],"</br>";
}


mysqli_close($con);
?>

</body>
</html>
