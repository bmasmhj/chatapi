<?php 

// if(isset($_GET['']))



?>
<div id="msghere"></div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>

<script>
    $.ajax({
    url : "http://localhost/chatapi/get-message.php?sender_id=855184&receiver_id=85632158",
    method : "GET",
    data : { username : 'example' }
}).done(function (response) {
    console.log(JSON.parse(response));
    // console.log(response);

    //your code here
});


</script>