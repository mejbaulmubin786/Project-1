
<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

// echo $stu_name;
// echo $stu_address;
// echo $stu_class;
// echo $stu_phone;


$conn = mysqli_connect("localhost","root","","coudpractice") or die("Connection Faild!");
$sql = "INSERT into student(sname, saddress, sclass, sphone) values('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
header("Location:http://localhost/crudpractice/index.php");

mysqli_close($conn);
?>
