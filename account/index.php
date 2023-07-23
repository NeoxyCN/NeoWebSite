<?php
include '../template.php';
LoadHead_First("用户中心");
LoadInclude("../");
LoadHead_End();
?>
<script src="../js/neoxyJS.js"></script>
<?php
LoadBody_First();
LoadStyle_Main("Neoxy's World","../");
if (isset($_COOKIE["user"])==false)
{
    echo "<script>
alert(\"您还未登录，请先登录\");
window.location.href='login.php';
</script>";
}
?>
    <div class="container">
                <ul class="list-group">
                    <li class="list-group-item"><h3>欢迎回来<?php echo $_COOKIE["user"];?></h3></li>
                    <li class="list-group-item"><h4>权限组:<?php
                            switch ($_COOKIE["power"])
                            {
                                case -1;
                                    $power="黑名单";
                                    break;
                                case 0;
                                    $power="超级管理员";
                                    break;
                                case 1;
                                    $power="普通用户";
                                    break;
                                case 2;
                                    $power="管理员";
                                    break;
                            }
                            echo $power."</br>";
                            echo"<div><button type=\"button\" class=\"btn btn-primary\" onclick=\"window.location='../admin.php'\">后台管理</button></div>";
                            ?></h4></li>
                    <li class="list-group-item"><span class="badge">暂未启用</span><h4>副权限组:</h4></li>
                    <li class="list-group-item"><h4>硬币:<?php echo $_COOKIE["coin"];?></h4></li>
                    <li class="list-group-item"><div><button type="button" class="btn btn-primary" id="changeData">修改个人资料</button></div></li>
                    <li class="list-group-item"><div><button type="button" class="btn btn-info" id="userList" onclick="window.location='list.php'">用户列表</button></div></li>
                    <li class="list-group-item"><div><button type="button" class="btn btn-danger" id="exit" onclick="exitUser()">退出</button></div></li>
                </ul>
    </div>
<?php
LoadBody_End("","..");
?>