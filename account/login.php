<?php
include '../template.php';
LoadHead_First("登录");
LoadInclude("../");
LoadHead_End();
LoadBody_First();
LoadStyle_Main("Neoxy's World","../");
?>
    <script>
        /*

        function login()
        {
            var form_login=document.forms["login"]["name"].value;
            if (form_login == null || form_login == "") {
                alert("请输入用户名");
                return false;
            }

        }*/</script>
    <div class="container">
       <div class="panel panel-default">
           <div class="panel-body">
            <h1 class="text-center">登陆</h1>
             <form class="form-group" action="../api/account/login.php" method="post">
              <div class="form-group">
                 <label for="">用户名</label>
                 <input class="form-control" type="text" name="name" required>
               </div>
                <div class="form-group">
                     <label for="">密码</label>
                     <input class="form-control" type="password" name="password" required>
                </div>
                 <div class="text-right">
                     <button class="btn btn-primary" type="submit">登录</button>
                 </div>
                 <a href="register.php">没有账号？点我注册</a>
             </form>
            </div>
        </div>
    </div>
<?php
LoadBody_End("","../");
?>