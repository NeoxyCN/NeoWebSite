<?php
header('content-type:text/html;charset=utf-8');

function LoadHead_First($name)
{
    echo"<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<title>$name</title>";
}
function LoadInclude($str="")
{

        echo "
<link href=\"".$str."css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"".$str."css/bootstrap-theme.min.css\"></script>
<script src=\"".$str."js/jquery.min.js\"></script>
<script src=\"".$str."js/bootstrap.min.js\"></script>
";

}
function LoadHead_End()
{
    echo"</head>";
}
function LoadBody_First()
{
    echo"<body>
";
}
function LoadStyle_Main($website_name2="Neoxy's World",$str)
{
echo "    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"".$str."index.php\">$website_name2</a>
            </div>
            <div>
                <ul class=\"nav navbar-nav\">
                    <li ><a href=\"".$str."index.php\">首页</a></li>
                    <li><a href=\"".$str."forum/index.php\">论坛</a></li>
                    <li><a href=\"".$str."api/index.php\">API</a></li>
                </ul>
            </div>";
if (isset($_COOKIE["user"]))
{
    $user_name=$_COOKIE["user"];
    echo " <ul class=\"nav navbar-nav navbar-right\"> 
             <li><a href=\"".$str."account/index.php\">$user_name</a></li> 
        </ul>
      </div>
    </nav>";
}else
    {echo " <ul class=\"nav navbar-nav navbar-right\"> 
             <li><a href=\"".$str."account/login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>登录</a></li> 
             <li><a href=\"".$str."account/register.php\"><span class=\"glyphicon glyphicon-user\"></span>注册</a></li> 
        </ul>
      </div>
    </nav>";}
}
function LoadBody_End($str="",$url="")
{
            echo"
<div class='text-center'>
<a href=".$url."about.php>© 2015-2017 Neoxy</a>
</div>
$str
</body>
</html>";
}
?>