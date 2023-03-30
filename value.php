<?php
echo "helloooo tester";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gender'];
// $newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : 'no';


#DataBase Connection
$conn = new mysqli("localhost","root","","jeeva");
if($conn->connect_errno){
    echo "failed to connect the Server",$conn->connect_error;
}
$sql = "INSERT INTO info1(name, email, password, age, gender) VALUES ('$name', '$email','$password', '$age', '$gender')";
$query=mysqli_query($conn,$sql);       
if($query){
    echo "<center><p>Submitted</p></center>";
    echo '<center><button  ><a href="form.html" >Go to home</a></button></center>';
}
else{
    echo "Unable to submit the form",$conn->error;
}
?>




