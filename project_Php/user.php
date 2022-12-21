<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <form action="" method="post">
    
<div class="search">
    <input type="text" name="kso" placeholder="search by id">
    <button name="search">search</button>
</div>
<hr>
<div class="add">
    <a href="./add.php">Add</a>
</div>
    </form>
    <div class="test">
    <?php
    require('config.php');
    $query="SELECT * FROM user";
    $result=mysqli_query($conn,$query);
    $output="";
    if($result){
       
        while($row=mysqli_fetch_assoc($result)){
        $output =' 
    <div class="us">
        <h3 class="name"> -id : '. $row['id'] .'</h3>
        <h3 class="name"> -first-name :'. $row['fn'] .'</h3>
        <h3 class="lastname"> -last-name :'. $row['ln'] .'</h3>
        <h3 class="mobile"> -age :'. $row['phone'] .'</h3>
        <div>
        <button><a href="./update.php?updateid='. $row['id'] .'">update</a></button>
        <button><a href="./delete.php?deleteid='. $row['id'] .'">delete</a></button>
        </div>
    </div>';
    
    echo $output;
    
 
        }
    }
    ?>
    </div>
<?php
session_start();
if(isset($_POST['search'])){
    $_SESSION['id']=$_POST['kso'];
 header("location:search.php?searchid={$_POST['kso']}");
}
?>

</div>
</div>

    </div>
    </div>
</body>
</html>