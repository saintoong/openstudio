<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'glgl5415',
    'openstudio');
$sql = "
    INSERT INTO client
        (id, password, name, phone, email)
        VALUES('{$_POST['id']}', '{$_POST['password']}', '{$_POST['name']}', '{$_POST['phone']}', '{$_POST['email']}'
    )
";
if ($_POST['password'] != $_POST['confirm']){
    echo "<script>alert(\"비밀번호가 일치하지 않습니다.\");</script>";
    echo("<script>location.href='C_Register.php';</script>");
    
} else {
    $result = mysqli_query($conn, $sql);
    if($result === false){
        error_log(mysqli_error($conn));
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    } else{
    echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
    echo("<script>location.href='C_Login.php';</script>");
}  
}
?>
