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
//     data : { sender_id : '85632158' , receiver_id : '855184' , message : 'hello this new msg' }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });


//get chat

// var settings = {
//   "url": "http://chatapi.epizy.com/chatapi/get-message.php?sender_id=85632158&receiver_id=855184",
//   "method": "POST",
//   "timeout": 0,
// };

// $.ajax(settings).done(function (response) {
//   console.log(response);
// });

const data = { sender_id: '85632158'  ,receiver_id : '855184' };

fetch('http://chatapi.epizy.com/chatapi/get-message.php', {
method: 'POST',
body: JSON.stringify(data),
})
.then((response) => response.json())
.then((data) => {
    console.log('Success:', data);
        // your code here
})

.catch((error) => {
    console.error('Error:', error);
}); 

// Create group
// $.ajax({
//     url : "http://localhost/chatapi/create-group",
//     method : "POST",
//     data : { creategroup : 'Full Stacks Developers' , creator : '855184' }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });

// insert group chat
// $.ajax({
//     url : "http://localhost/chatapi/insert-group-message",
//     method : "POST",
//     data : { group_table : '6374d9eb760e9' , receiver_id : '855184' , message : 'I sended message' }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });

// get group chat
// $.ajax({
//     url : "http://localhost/chatapi/get-group-message",
//     method : "GET",
//     data : { group_id : '6374d9eb760e9' , receiver_id : '855184'  }
// }).done(function (response) {
//     console.log(JSON.parse(response));
// });






</script>