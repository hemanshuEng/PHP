<?php include 'header.php';
    include 'db.php';
 ?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE user SET username = '$username' , password ='$password' WHERE id =$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error());
    }
}
?>

<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_update.php" method="post">
            <?php
            include 'form.php';
            ?>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                       
                        $query = "SELECT * FROM user";
                        $result=mysqli_query($connection,$query);
                        if(!$result){
                        die("query failed".mysqli_error());
                        }
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $id =$row['id'];
                            echo "<option value ='$id'>$id</option>";
                        }
                     
                    ?>
                   
                </select>
                <?php print_r($row);?>

            </div>

            <input type="submit" name ="submit" value="update"class="btn btn-primary">
            
            </form>
        </div>
    </div>
</body>
</html>

