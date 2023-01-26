<?php
include "connect_test.php";
$query = "select * from database_new";
$run = mysqli_query($conn,$query);  

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
                font-family: 'verdana', sans-serif;  
           }  
           body{  
                display: flex; 
                justify-content: center;
                align-items: center;
                width: 100%;  
                height: 100vh;  
                background-color: #5d6d7d;  
           }  
          
           
            table{  
                border-collapse: collapse; 
                 table-layout:fixed;
                 margin-left: 17em;  
                  
           }  
           
             table th{  
                background-color: red;  
                padding: 8px 10px;  
                color: #fff;
                  
           }  
           table td{  
                background-color: #f3f3f3;  
                padding: 8px 10px;  
                color: #111; 
                 
           }  
          
           .container table .red{  
                background-color: red; 
                display: inline-block;
                margin-bottom: 0.5em;
                 width: 100%;
                color: #ffff;  
                font-size: 1em;  
                padding: 5px;  
                text-decoration: none;
      
           }  
           
           .green{  
                
                background-color: green; 
                display: inline-block;
                margin-bottom: 0.5em;
                width: 100%;
                color: #ffff;  
                font-size: 1em;  
                padding: 5px;  
                text-decoration: none;;
   
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
		<h1>Registration of football players</h1>
		
	<a href="/insert.php"><button class="green">Add User</button></a><br><br>
		<!-- TABLE CONSTRUCTION-->
		<table class="table" border="1" cellpadding="0">
		    <head>
			<tr>
			    <th>user_id</th>
				<th>firstname</th>
				<th>surname</th>
				<th>gender</th>
				<th>position</th>
				<th>nationality</th>
				<th>mobile</th> 
			     <th>email</th> 
				<th>actions</th>
			</tr>
			</thread>
			<tbody> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
			 
			$number=1; 
            if($num = mysqli_num_rows($run)>0) {
            while($result = mysqli_fetch_assoc($run)) {
             echo "     
             
             	<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
					
				<td> $number</td>
				<td>".$result['firstname']."</td>
				<td>".$result['surname']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['position']."</td>
				<td>".$result['nationality']."</td>
				<td>".$result['mobile']."</td> 
				<td>".$result['email']."</td> 
				<td>
			   	<a href='update_1.php?user_id=".$result['user_id']."' class='green' id='btn' >Update</a>
                <a href='delete.php?user_id=".$result['user_id']."' class='red' id='btn'>Delete</a>
                </td>
			     </tr>
			     
			     ";  
			      $number++;  
			     }
			    
            }
            ?>
            
              </tbody>
              </table><br>
              <a href="/search.php"><button class="green">Search</button></a>
              
               </div>
        </body>
        </html>
            
            
            
            
           
      