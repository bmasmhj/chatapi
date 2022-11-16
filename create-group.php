<?php
$output = '';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $output .= '{ "type":"error" , "message" : "This Route does not support GET method" }';
}else if(isset($_POST['creategroup'])){
    require 'conn.php';
    $creator = $_POST['creator'];
    $group = $_POST['creategroup'];
    $groupid =  uniqid();
        try{
            mysqli_query($conn, "INSERT INTO `group_total`(`group_id`,`groupnames` , `logo`) VALUES ('$groupid','$group' , 'default.png')");
            mysqli_query($conn, "CREATE TABLE `chatapi`.`group_$groupid` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
            mysqli_query($conn, "ALTER TABLE `group_$groupid` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`unique_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
            mysqli_query($conn, "INSERT INTO `group_$groupid` (`user_id`) VALUES ('$creator')");
            $output .= '{ "type":"success" , "message" : "Group Created" }';
        } catch (Exception $e){
            $error = $e->getMessage();
            $output .= '{ "type":"error" , "message" : "Group Creation Failed" }';

        }
    }

echo $output;




