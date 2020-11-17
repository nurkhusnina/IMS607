<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "chapter1";

//create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($conn -> connect_error)
{
die ("connection failed: " . $conn -> connect_error);
}
$name = $_POST ['txt_nama']; 
$matric_no = $_POST ['txt_matrix']; 
$address = $_POST ['txt_address']; 

$sql = "INSERT INTO tbl_student (student_name, matric_no, address) VALUES ('$name','$matric_no','$address')";

if ($conn -> query($sql)=== TRUE)
{
    $last_id = $conn -> insert_id;
    echo "New Record Created Successfully. Last Inserted ID is : " . $last_id;

} else
{
    echo "Error: " . $sql . "<br>" . $conn ->error;

}
$conn -> close (); 
?>