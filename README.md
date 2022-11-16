# chatapi
 <h2>Chat App API</h2>
<br/>
<br/>

 <h2>Create User</h2>
<br/>
<br/>

 <h2>Get User</h2>
<br/>
<br/>

 <h2>Get Message </h2>
<br/>
<br/>&#9;-url : your-api-site/chatapi/get-message 
<br/>&#9;-method : GET
<br/>&#9;-data : { sender_id : '855184' , receiver_id : '85632158'  }
<br/>
<br/>
 <h2>Insert chat </h2>
<br/>
<br/>&#9;-url : your-api-site/chatapi/insert-chat
<br/>&#9;-method : POST
<br/>&#9;-data : { sender_id : '85632158' , receiver_id : '855184' , message : 'thanks buddy' }
<br/>
<br/>
 <h2>Create Group</h2>
<br/>
<br/>&#9;-url : "your-api-site/create-group",
<br/>&#9;-method : POST
<br/>&#9;-data : { creategroup : 'Group Name' , creator : '855184' }
<br/>
<br/>
 <h2>Get Group Message</h2>
<br/>
<br/>&#9;-url : "your-api-site/get-group-message",
<br/>&#9;-method : GET
<br/>&#9;-data : { group_id : '6374d3182aade' , receiver_id : '855184'  }


