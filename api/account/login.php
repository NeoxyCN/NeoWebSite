<?php
include '../../connect.php';
if(isset($_REQUEST["name"])) {
    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];
    $sql = "SELECT * FROM $db_userdb WHERE name=\"$name\"";
    $result = mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($result);
    $true=$row["password"];
    $power=$row["power"];
    $coin=$row["coin"];
    if($_SERVER["REQUEST_METHOD"]== 'GET')
    {
        //0->未知错误/服务器关闭 1->登录成功 2->登录失败
        if ($password==$true)
        {
            setcookie("user", $name, 0,"/");
            setcookie("power",$power, 0,"/");
            setcookie("coin",$coin, 0,"/");
            $back_arry=array('result' => "1");
            echo json_encode($back_arry);
        }else
        {
            $back_arry=array('result' => "2");
            echo json_encode($back_arry);
        }
    }else{
        if ($password==$true)
        {
            setcookie("user", $name, 0,"/");
            setcookie("power",$power, 0,"/");
            setcookie("coin",$coin, 0,"/");
            echo "<script>
alert(\"登录成功，欢迎回来$name\");
window.location.href='../../account/index.php';
</script>";
        }else
        {
            echo "<script>
alert(\"登录失败，用户名或密码错误。\");
window.history.back(); 
</script>";
        }
    }
}
?>