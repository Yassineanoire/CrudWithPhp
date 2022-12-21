<html>
  <link rel="stylesheet" href="user.css">
</html>

<?php
 require('config.php');
 session_start();
   $sql="SELECT * from user where id = '{$_SESSION['id']}'";
   $result = mysqli_query($conn,$sql);

   if($result){
    $row = mysqli_fetch_assoc($result); 
    $output="";
       $output =' <div class="us">
       <h3 class="name">'. $row['id'] .'</h3>
       <h3 class="name">'. $row['fn'] .'</h3>
       <h3 class="lastname">'. $row['ln'] .'</h3>
       <h3 class="mobile">'. $row['phone'] .'</h3>
       <button><a href="./update.php?updateid='. $row['id'] .'">update</a></button>
       <button><a href="./delete.php?deleteid='. $row['id'] .'">delete</a></button>
   </div>';
   
   echo $output;
   
       }
       else{
        echo "id ghalet a3chiri";
       }
   
   
?>