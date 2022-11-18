<?php 
require 'origin.php';

$output = "";
$i = 0;
$data = [];
$k = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $output .= '{ "type":"error" , "message" : "This Route does not support POST method" }';
}else if(isset($_GET['group_id']) && isset($_GET['receiver_id']) ){
        include_once "conn.php";
        $group_id = $_GET['group_id'];
        $receiver_id = $_GET['receiver_id'];
        $checkgrp = "SELECT * FROM `group_$group_id` WHERE user_id = '$receiver_id' ";
        try {
            $checkgrpquery = mysqli_query($conn, $checkgrp);
            if(mysqli_num_rows($checkgrpquery) > 0){
                $sql = "SELECT * FROM `group_messages` WHERE group_table = 'group_$group_id' ";
                $query = mysqli_query($conn, $sql);
                if(mysqli_num_rows($query) > 0){
                    $output .='[';
                    while($row = mysqli_fetch_assoc($query)){
                        $k ++;
                       array_push($data , $row);
                    }
                    foreach($data as $key=> $val){
                        $message = $val['message'];
                        $reaction = $val['reaction'];

                        if($val['user_id'] === $receiver_id){
                            $output .= '{ "type":"outgoing" , "message" : "'.$message.'" , "time" : "2:30" , "reaction" : "'.$reaction.'" }' ;
                        }else{
                            $output .= '{ "type":"incoming" , "message" : "'.$message.'" , "time" : "2:30" }' ;
                        }
                        $i++;
                        if($i > 0 && $i < $k ){
                            $output .= ',';
                        }
                    }
                    $output .="]";
                }
                else{
                    $output .= '{ "nomessage" : "true", "type":"none" , "message" : "No messages are available. Once you send messages they will appear here" , "time" : "0" }';
                }
            }else{
                $output .= '{ "type":"unauthorized" , "message" : "You are not in the group" }';
            }
        }
        catch (Exception $e){
            $error = $e->getMessage();
            $output .= '{ "type":"error" , "message" : "Group not Found" }';

        }
       
}else{
    $output .= '{ "type":"error" , "message" : "Invalid Input" }';
}
echo $output;

?>

