# chatapi
 Chat App API

Create User

Get User

Get Message 
    url : your-api-site/chatapi/get-message
    method : GET
    data : { sender_id : '855184' , receiver_id : '85632158'  }

Insert chat 
    url : your-api-site/chatapi/insert-chat
    method : POST
    data : { sender_id : '85632158' , receiver_id : '855184' , message : 'thanks buddy' }


Create Group
    url : "your-api-site/create-group",
    method : POST
    data : { creategroup : 'Group Name' , creator : '855184' }


Get Group Message
    url : "your-api-site/get-group-message",
    method : GET
    data : { group_id : '6374d3182aade' , receiver_id : '855184'  }

