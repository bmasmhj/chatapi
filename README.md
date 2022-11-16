# chatapi
 <h4>Chat App API</h4>
<br/>
<br/>

 <h4>Create User</h4>
<br/>
<br/>

<h4>Get User</h4>
<br/>
<br/>

 <h4>Get Message </h4>
<br/>&#9;-url : your-api-site/chatapi/get-message 
<br/>&#9;-method : GET
<br/>&#9;-data : { sender_id : '855184' , receiver_id : '85632158'  }
<br/>
<br/>
 <h4>Insert chat </h4>
<br/>&#9;-url : your-api-site/chatapi/insert-chat
<br/>&#9;-method : POST
<br/>&#9;-data : { sender_id : '85632158' , receiver_id : '855184' , message : 'thanks buddy' }
<br/>
<br/>
 <h4>Create Group</h4>
<br/>&#9;-url : "your-api-site/create-group",
<br/>&#9;-method : POST
<br/>&#9;-data : { creategroup : 'Group Name' , creator : '855184' }
<br/>
 <h4>Get Group Message</h4>
<br/>
<br/>&#9;-url : "your-api-site/get-group-message",
<br/>&#9;-method : GET
<br/>&#9;-data : { group_id : '6374d3182aade' , receiver_id : '855184'  }


