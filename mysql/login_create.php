<?php
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    $connection= mysqli_connect('localhost','root','','login');
    if($connection){
        echo "we are connected";
    }else{
        die("database failed");
    }
     // echo "username:".$username."<br>";
    //echo "password:".$password."<br>";
}

    $query ="INSERT INTO user(username,password)";
    $query .="VALUES('$username','$password')";

    $result=mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error());
    }


?>