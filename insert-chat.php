<?php 
require 'origin.php';

$dt = new DateTime();
$dt->setTimezone(new DateTimeZone('Asia/Kathmandu'));
$dts = $dt->format('Y-m-d H:i:s');
$output = '';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $output .= '{ "type":"error" , "message" : "This Route does not support GET method" }';
}else if(isset($_POST['sender_id']) && isset($_POST['receiver_id']) && isset($_POST['message'])  ){
        include_once "conn.php";
        $outgoing_id = $_POST['receiver_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            if(mysqli_query($conn, "INSERT INTO `messages`(`sender`, `receiver`, `msg`, `time`) VALUES ('$incoming_id','$outgoing_id','$message','$dts')")){
                $output .= '{ "type":"success" , "message" : "Input added" }';
            }
        }
    }else{
        $output .= '{ "type":"error" , "message" : "Invalid Input" }';
    }

echo $output;

    
?>