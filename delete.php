
 <?php   
 include 'connect_test.php';  
 if (isset($_GET['user_id'])) {  
      $user_id = $_GET['user_id'];  
      $query = "DELETE FROM `database_new` WHERE user_id = '$user_id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:select.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  