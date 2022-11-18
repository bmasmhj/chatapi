<?php 
require 'origin.php';
$dt = new DateTime();
$dt->setTimezone(new DateTimeZone('Asia/Kathmandu'));
$dts = $dt->format('Y-m-d H:i:s');
$output = '';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $output .= '{ "type":"error" , "message" : "This Route does not support GET method" }';
}else if(isset($_POST['receiver_id']) && isset($_POST['group_table']) && isset($_POST['message'])  ){
        include_once "conn.php";
        $group_id = $_POST['group_table'];
        $receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
        $checkgrp = "SELECT * FROM `group_$group_id` WHERE user_id = '$receiver_id' ";
        try {
            $checkgrpquery = mysqli_query($conn, $checkgrp);
            if(mysqli_num_rows($checkgrpquery) > 0){
                $group_table = 'group_'.$group_id;
                $message = mysqli_real_escape_string($conn, $_POST['message']);
                if(!empty($message)){
                    if(mysqli_query($conn, "INSERT INTO `group_messages`(`group_table`, `user_id`, `message`,`reaction`, `time`) VALUES ('$group_table','$receiver_id','$message','0','$dts')")){
                        $output .= '{ "type":"success" , "message" : "Input added" }';
                    }
                }
            }else {
                $output .= '{ "type":"permission_error" , "message" : "You dont have permission to send message" }';
            }
        }
        catch (Exception $e){
            $error = $e->getMessage();
            $output .= '{ "type":"permission_error" , "message" : "Group doesnot exist" }';
        }
    }else{
        $output .= '{ "type":"inputerror" , "message" : "Invalid Input" }';
    }

echo $output;

    
?>