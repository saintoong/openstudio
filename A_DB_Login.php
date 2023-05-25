<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'glgl5415',
    'openstudio');
$id = $_POST['id'];
$password = $_POST['password'];
$sql = "
    SELECT * FROM artist A WHERE id = '$id' AND password = '$password';
";
 
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
    echo("<script>location.href='A_Main.php';</script>");
    } else{
    echo "<script>alert(\"아이디 혹은 비밀번호가 일치하지 않습니다.\");</script>";
    echo("<script>location.href='A_Login.php';</script>");
}  
?>
