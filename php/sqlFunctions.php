<?php


function dbconnection(){
   global $dbcon;
   $dbcon = mysqli_connect("localhost","root","","portfolio");
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
    addMessage($name,$email,$phone,$comment);
  }
function addMessage($name,$email,$phone,$comment){
    global $dbcon;
    dbconnection();
    $query = "INSERT INTO message(Name,Email,Phone,Message) 
    VALUES ('$name','$email',$phone,'$comment')";
    $result = mysqli_query($dbcon, $query);
}