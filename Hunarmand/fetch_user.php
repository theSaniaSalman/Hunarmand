<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM workerregistration 
WHERE userType = 'Buyer'
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <td>Username</td>
  <td>Action</td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['workerID'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';
 }
 
 $output .= '
 <tr>
  <td>'.$row['userName'].' '.count_unseen_message($row['workerID'], $_SESSION["user_login"], $connect).'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['workerID'].'" data-tousername="'.$row['userName'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
