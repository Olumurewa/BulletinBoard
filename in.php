<?php
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];

   

   $conn= new mysqli('localhost', 'root', '', 'project');
   if($conn->connect_error){
      die('Connection Failed' .$conn->connect_error);
   }else{
      $stmt =$conn->prepare("insert into test2( name, email, password) values(?,?,?)" );
      $stmt->bind_param("sss",$name, $email,$password);
      $stmt->execute();
      echo"Success";
      $stmt->close();
   }
   
      header("Location:board.php");
   
    
      

?>