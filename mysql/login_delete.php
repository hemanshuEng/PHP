<?php include 'header.php';
    include 'db.php';
 ?>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $query = "DELETE FROM user WHERE id =$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("query failed");
    }
}
?>

<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_delete.php" method="post">
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

            <input type="submit" name ="submit" value="delete"class="btn btn-warning">
            
            </form>
        </div>
    </div>
</body>
</html>