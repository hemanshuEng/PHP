<?php
 include 'header.php';
?>
<body>
    <div class="container">
        <div class="col-sm-6">
                <?php
                    include 'db.php';
                    $query = "SELECT * FROM user";
                    $result=mysqli_query($connection,$query);
                    if(!$result){
                    die("query failed".mysqli_error());
                    } 
                    while($row=mysqli_fetch_assoc($result)){
                ?>
                <pre>
                <?php
                    print_r($row);
                ?>
                </pre>
                <?php
                }
                ?>
           
        </div>
    </div>
</body>
</html>

