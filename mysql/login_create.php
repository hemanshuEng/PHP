<?php include 'db.php';
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
}

    $query ="INSERT INTO user(username,password)";
    $query .="VALUES('$username','$password')";

    $result=mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error());
    } 
    
    echo"user created sucessfully";
?>