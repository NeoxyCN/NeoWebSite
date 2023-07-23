<?php
include '../template.php';
LoadHead_First("注册");
LoadInclude("../");
?>
    <script>
        function regForm() {
            var myPwd = document.forms["myForm"]["password"].value;
            var myPwd2 = document.forms["myForm"]["password2"].value;
            if (myPwd != myPwd2) {
                alert("两次密码不一致！");
                return false;
            }
        }
    </script>
<?php
LoadHead_End();
LoadBody_First();
LoadStyle_Main("Neoxy's World","../");
?>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">注册</h1>
                <form class="form-group" action="../api/account/register.php" method="post" onsubmit="return regForm()" name="myForm">
                    <div class="form-group">
                        <label for="">用户名</label>
                        <input class="form-control" type="text" name="name" placeholder="独一无二的用户名" required>
                    </div>
                    <div class="form-group">
                        <label for="">密码</label>
                        <input class="form-control" type="password" name="password" placeholder="密码" required>
                    </div>
                    <div class="form-group">
                        <label for="">请再次输入密码</label>
                        <input class="form-control" type="password" name="password2" placeholder="需要与上次输入相同" required>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">注册</button>
                    </div>
                    <a href="login.php">已有账号？点我登录</a>
            </div>
        </div>
    </div>
<?php
LoadBody_End("","../");
?>