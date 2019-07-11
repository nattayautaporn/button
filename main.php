<?php
    include('sos.php');

    $device_id =$_GET['device_id'];
 //   $message1 =$_GET['message1'];


    $sql ="INSERT INTO event1(device_id/*, message1*/) VALUES (:device_id/*, :message1*/)";

    $stmt = $PDO->prepare($sql);

    $stmt ->bindParam(':device_id',$device_id);
 /*   $stmt ->bindParam(':message1',$message1); */

    if($stmt-> execute() ){
        echo "save";
    }
    else{
        echo "error";
    }


?>

