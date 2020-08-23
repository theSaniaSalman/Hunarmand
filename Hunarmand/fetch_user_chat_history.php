<?php

//fetch_user_chat_history.php

include('database_connection.php');

session_start();
$receiverID  = $_POST['to_user_id'];
$receivername = get_user_name($receiverID, $connect);
echo fetch_user_chat_history($_SESSION["user_login"], $receivername, $connect);

?>