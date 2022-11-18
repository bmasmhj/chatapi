<?php 
require 'origin.php';

$output = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $output .= '{ "type":"error" , "message" : "This Route does not support POST method" }';
}else if(isset($_GET['sender_id']) && isset($_GET['receiver_id']) ){
        include_once "conn.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_GET['receiver_id']);
        $incoming_id = mysqli_real_escape_string($conn, $_GET['sender_id']);
        $i = 0;
        $k = 0;
        $data = [];
        $sql = "SELECT * FROM messages LEFT JOIN user ON user.unique_id = messages.receiver
                WHERE (receiver  = {$outgoing_id} AND sender = {$incoming_id})
                OR (receiver  = {$incoming_id} AND sender = {$outgoing_id}) ORDER BY messages.id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
        $output .='[';
            while($row = mysqli_fetch_assoc($query)){
                $k ++;
               array_push($data , $row);
            }
            foreach($data as $key=> $val){
                $message = $val['msg'];
                if($val['receiver'] === $outgoing_id){
                    $output .= '{ "type":"outgoing" , "message" : "'.$message.'" , "time" : "2:30" }' ;
                                
                }else{
                    $output .= '{ "type":"incoming" , "message" : "'.$message.'" , "time" : "2:30" }' ;
                }
                $i++;
                if($i > 0 && $i < $k ){
                    $output .= ',';
                }
            }
            $output .="]";
        
        }else{
            $output .= '{ "nomessage" : "true", "type":"none" , "message" : "No messages are available. Once you send messages they will appear here" , "time" : "0" }';
        }
}else{
    $output .= '{ "type":"error" , "message" : "Invalid Input" }';
}
echo $output;

?>