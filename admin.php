<?php
include 'config.php';
include 'connect.php';
include 'template.php';
LoadHead_First("后台管理");
LoadInclude("");
LoadHead_End();
LoadBody_First();
LoadStyle_Main("Neoxy's World","");
if (isset($_COOKIE["power"]))
{
    if ($_COOKIE["power"]==0)
    {
        $sql="select MAX(id) from $db_userdb";
        $result = mysqli_query($mysqli,$sql);
        $row_data=mysqli_fetch_array($result);
        $max_id=$row_data[0];
        $max_id_str= $max_id+1;
        $admin_name=$_COOKIE["user"];
        echo "    
<div class=\"container\">
            <div class=\"alert alert alert-success\">欢迎您！$admin_name</div>
        <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">用户管理</h3>
    </div>
    <div class=\"panel-body\">
        共有 $max_id_str 用户注册了在 $website_name 的帐号
    </div>
    </div>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">论坛管理</h3>
    </div>
    <div class=\"panel-body\">
        此处应有界面
    </div>
</div>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">帖子管理</h3>
    </div>
    <div class=\"panel-body\">
        此处应有界面
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">API</h3>
    </div>
    <div class=\"panel-body\">
        此处应有界面
    </div>
</div>
<div class=\"panel panel-warning\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">高级设置</h3>
    </div>
    <div class=\"panel-body\">
        这是一个基本的面板
    </div>
</div>
</div>";
    }else
        {
            echo "
<div class=\"container\">
<div class=\"alert alert-danger\">您没有权限访问当前页面。</div>
</div>";
        }
}else{
    echo "
<div class=\"container\">
<div class=\"alert alert-danger\">您没有权限访问当前页面。</div>
</div>";
}
LoadBody_End("","");
?>