# chatapi
 Chat App API
<br/>
Create User
<br/>
Get User
<br/>
Get Message 
<br/>&#9;-url : your-api-site/chatapi/get-message 
<br/>&#9;-method : GET
<br/>&#9;-data : { sender_id : '855184' , receiver_id : '85632158'  }
<br/>
Insert chat 
<br/>&#9;-url : your-api-site/chatapi/insert-chat
<br/>&#9;-method : POST
<br/>&#9;-data : { sender_id : '85632158' , receiver_id : '855184' , message : 'thanks buddy' }
<br/>
Create Group
<br/>&#9;-url : "your-api-site/create-group",
<br/>&#9;-method : POST
<br/>&#9;-data : { creategroup : 'Group Name' , creator : '855184' }
<br/>
Get Group Message
<br/>&#9;-url : "your-api-site/get-group-message",
<br/>&#9;-method : GET
-<br/>data : { group_id : '6374d3182aade' , receiver_id : '855184'  }


