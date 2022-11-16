# chatapi
 Chat App API
<br/>
Create User
<br/>
Get User
<br/>
Get Message 
<br/>-url : your-api-site/chatapi/get-message 
<br/>-method : GET
<br/>-data : { sender_id : '855184' , receiver_id : '85632158'  }
<br/>
Insert chat 
<br/>-url : your-api-site/chatapi/insert-chat
<br/>-method : POST
<br/>-data : { sender_id : '85632158' , receiver_id : '855184' , message : 'thanks buddy' }
<br/>
Create Group
<br/>-url : "your-api-site/create-group",
<br/>-method : POST
<br/>-data : { creategroup : 'Group Name' , creator : '855184' }
<br/>
Get Group Message
<br/>-url : "your-api-site/get-group-message",
<br/>-method : GET
-<br/>data : { group_id : '6374d3182aade' , receiver_id : '855184'  }


