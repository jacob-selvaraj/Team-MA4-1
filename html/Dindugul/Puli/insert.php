<?php

 
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){

$conn = new mysqli("localhost","root","","ticket")
or    die("Connection failed: " . $conn->connect_error);

$sql = "INSERT INTO seat VALUES ($selected)";


if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}
}
echo '<body background="images.jpg">';
?>