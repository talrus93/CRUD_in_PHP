 <?php
include "connect_test.php";
 $msg="";  
 $firstname="";  
 $surname="";  
 $gender="";  
 $position="";  
 $nationality=""; 
 $mobile = "";
 $email = "";

 if (isset($_GET['user_id'])) {  
      $user_id=$_GET['user_id'];  
      $select=mysqli_query($conn,"select * from database_new where user_id='$user_id'");  
      $data=mysqli_fetch_assoc($select);  
      $firstname=$data['firstname'];  
      $surname=$data['surname'];  
      $gender =$data['gender '];  
      $position=$data['position'];  
      $nationality=$data['nationality'];  
      $mobile = $data['mobile'];
      $email = $data['email'];
      
 }  


 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $firstname=$_POST['firstname']; 
      $surname = $_POST['surname'];
	  $gender = $_POST['gender'];
	  $position = $_POST['position'];
	  $nationality = $_POST['nationality'];
	  $mobile = $_POST['mobile'];
	  $email = $_POST['email'];
        
      if (isset($_GET['user_id'])) {  
           $update=mysqli_query($conn,"UPDATE `database_new` SET `firstname`='$firstname',`surname`='$surname',`gender`='$gender',`position`='$position',`nationality`='$nationality',`mobile`='$mobile',`email`='$email' WHERE user_id='$user_id'");  
           if ($update) {  
                header("location:select.php");  
                die();  
           }  
      }else{  
           $insert=mysqli_query($conn,"INSERT INTO `database_new`(`firstname`, `surname`, `gender`, `position`, `nationality`,`mobile`,`email`) VALUES (`$firstname`, `$surname`, `$gender`, `$position`, `$nationality`,`$mobile`,`$email` NOW())");  
           if ($insert) {  
                $msg="Data inserted successfully";  
           }else{  
                $msg="Something Error, Try after sometime !";  
           }  
      }  
 } 
 
 if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
    $firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$gender = $_POST['gender'];
	$position = $_POST['position'];
	$nationality = $_POST['nationality'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];

header("Location:select.php");

}
 
 
  ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Update</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                width: 100%;  
                height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 500px;  
                width: 100%;  
                background-color: #ffff;  
           }  
           .container form{  
                width: 100%;  
                padding: 30px;  
           }  
           .container form .data-insert{  
                width: 100%;  
                padding: 12px 10px;  
                outline: none;  
                border: 1px solid #111;  
                margin: 8px 0px  
           }  
           .container form .sub_btn{  
                width: 100%;  
                padding: 10px 30px;  
                background-color: red;  
                color: #ffff;  
                font-size: 1em;  
                outline: none;  
                border: 0;  
                cursor: pointer;  
           }  
           .container h1{  
                display: block;  
                text-align: center;  
                padding: 15px 0px;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <h1>Data Update</h1>  
      <form method="post" action="">  
           <input type="text" name="firstname" placeholder="Enter your name" class="data-insert" value="<?php echo $firstname; ?>">  
           <input type="text" name="surname" placeholder="Enter your surname" class="data-insert" value="<?php echo $surname; ?>"><br><br> 
           gender: <br>
            <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="male">male
            <br><br>
           <input type="text" name="position" placeholder="Enter your position" class="data-insert" value="<?php echo $position; ?>">  
           <input type="text" name="nationality" placeholder="Enter your nationality" class="data-insert" value="<?php echo $nationality; ?>">  
           <input type="text" name="mobile" placeholder="Enter your mobile" class="data-insert" value="<?php echo $mobile; ?>">  
           <input type="email" name="email" placeholder="Enter your email" class="data-insert" value="<?php echo $email; ?>">  
           <input type="submit" name="submit" class="sub_btn" value="Submit">  
           <br>  
           <span><?php echo $msg; ?></span>  
      </form>  
 </div>  
 </body>  
 </html>  


















