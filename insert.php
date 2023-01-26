<?php
include "connect_test.php";
if (isset($_POST['submit'])) 
{
    
    $firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$gender = $_POST['gender'];
	$position = $_POST['position'];
	$nationality = $_POST['nationality'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	
$sql = "INSERT INTO database_new(firstname, surname, gender, position, nationality,mobile,email)VALUES('$firstname', '$surname','$gender','$position','$nationality','$mobile','$email')";
$result = $conn->query($sql);

if($result == True){
 echo "New record created succesfully";
}
else {
echo "Error:" . $sql . "<br>" . $conn->error;    
} 

$conn->close();
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
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Registration of football players </h1>
<form action="" method="POST">
<fieldset>
<legend>Personal data</legend>
name: <input name="firstname" required><br><br>
surname: <input name="surname" required><br><br>
gender: <br>
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male
<br><br>

nationality: <input name="nationality" required><br><br>
position: <input name="position" required><br><br>
mobile: <input type="text" name="mobile" required><br><br>
email: <input type="email" name="email" required><br><br>
</fieldset><br>
<input type="submit" name="submit" value="submit" >
<input type="reset" value="delete" name=“reset“><br><br>

</form>




</body>
</html>



