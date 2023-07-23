<?php
include '../../connect.php';
if(isset($_REQUEST["name"]))
{
    $name = $_REQUEST["name"];
    $sql = "SELECT password FROM $db_userdb WHERE name=\"$name\"";
    $result = mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($result);
if (isset($row["password"]))
{
    if($_SERVER["REQUEST_METHOD"]== 'GET')
    {
        //1->s 2->f
        //reason 1->存在
        $back_arry=array('result' => 2,`reason` => 1);
        echo json_encode($back_arry);
    }else
        {
            echo "<script>
alert(\"注册失败，用户已存在。\");
//window.history.back(); 
</script>";
        }
}else
    {
        $name = $_REQUEST["name"];
        $password = $_REQUEST["password"];
        $sql="select MAX(id) from $db_userdb";
        $result = mysqli_query($mysqli,$sql);
        $row_data=mysqli_fetch_array($result);
        $max_id=$row_data[0]+1;
        $sql = "INSERT INTO $db_userdb (id,name, password, power,coin)
     VALUES ($max_id, '$name', '$password','1',0)";
        $result = mysqli_query($mysqli,$sql);
        if ($result==true)
        {
            if ($_SERVER["REQUEST_METHOD"]== 'GET')
            {
                $back_arry=array('result' =>1);
                echo json_encode($back_arry);
            }else
                {
                    echo "<script>
                   alert(\"注册成功，请牢记您的密码。\");
                  window.location.href='../../account/login.php'</script>";
                }
}
}
}