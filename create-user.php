<?php

$dt = new DateTime();
$dt->setTimezone(new DateTimeZone('Asia/Kathmandu'));
$dts = $dt->format('Y-m-d H:i:s');
$output = '';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $output .= '{ "type":"error" , "message" : "This Route does not support GET method" }';
}else if(isset($_POST['fname']) &&  isset($_POST['email']) && isset($_POST['password'])){
    include_once "conn.php";
    $ran_id = rand(time(), 100000000);
    $email = $_POST['email']
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$email}'");
    if(mysqli_num_rows($sql) > 0){
        $output .= '{ "type":"emailerror" , "message" : "You have already signned in please login" }';
    }else{
        
    }
    
}else{
    $output .= '{ "type":"inputerror" , "message" : "Invalid Input" }';
}

echo $output;


?>