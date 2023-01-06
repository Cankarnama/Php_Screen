<?php   
  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $Phone=$_POST['phone'];
  $Body=$_POST['body'];
  //Database connection

$connection= new mysqli ('localhost', 'root','','contact_php');
if ($connection-> connect_error){
    die('Connection Has Failed : '.$conn->connection_error);
}
else{
    $stmnt=$connection->prepare("insert into on_submit(Name, Email, Phone, Body) 
    values(?, ?, ?, ? )");
    $stmnt->bind_param ("ssis", $Name, $Email, $Phone, $Body);
    $stmnt->execute();
    echo "registration successful....";
    $stmnt->close();
    $connection->close();
}



?>