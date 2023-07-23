<?php
include '../template.php';
include '../config.php';
LoadHead_First("论坛规则");
LoadInclude("../");
LoadHead_End();
?>
<?php
LoadBody_First();
LoadStyle_Main("Neoxy's World","../");
?>
    <div class="container">
        <div class="panel panel-default">

            <?php
            if(isset($_GET["pages"]))
            {
                switch ($_GET["pages"])
                {
                    case 1:
                        echo "
        <h2>第一部分-用户准则</h2></p>
        请勿重复注册账号，如果发现，封禁所有帐号！";
                        break;
                    case 2:
                        echo "<div class=\"panel-body\">
        <h2>第二部分-论坛发言规则</h2></p>
        请勿灌水！";
                        break;
                }
            }else
                {
                    echo "<div class=\"panel-body\">
        <h2>帮助及规则</h2></p>
        点击下面的按钮分条查看";
                }

            ?>
        </div>
            <ul class="pagination">
                <li><a href="rules.php?pages=1">1</a></li>
                <li><a href="rules.php?pages=2">2</a></li>
            </ul>
        </div>
    </div>
<?php
LoadBody_End("","..");
?>