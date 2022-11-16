<?php 

// if(isset($_GET['']))



?>
<div id="msghere"></div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>

<script>


// insert chat
//     $.ajax({
//     url : "http://localhost/chatapi/insert-chat",
//     method : "POST",
//     data : { sender_id : '85632158' , receiver_id : '855184' , message : 'thanks buddy' }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });


//get chat
// $.ajax({
//     url : "http://localhost/chatapi/get-message",
//     method : "GET",
//     data : { sender_id : '855184' , receiver_id : '85632158'  }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });

// get group chat
$.ajax({
    url : "http://localhost/chatapi/get-group-message",
    method : "GET",
    data : { group_id : '6374d3182aade' , receiver_id : '855184'  }
}).done(function (response) {
    console.log(JSON.parse(response));
});

// Create group
// $.ajax({
//     url : "http://localhost/chatapi/create-group",
//     method : "POST",
//     data : { creategroup : 'Full Stacks Developers 2' , creator : '855184' }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });



</script>