<?php
include '../template.php';
include '../config.php';
include '../connect.php';
LoadHead_First("论坛");
LoadInclude("../");
LoadHead_End();
?>
<?php
LoadBody_First();
LoadStyle_Main("Neoxy's World","../");
?>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">论坛</h3>
            </div>
            <div class="panel-body">
                欢迎来到<?php echo $website_name ?> 论坛，你可以在这里畅所欲言，但是发帖时请遵守<a href="rules.php">论坛规则</a>
            </div>
            <table class="table">
                <th>论坛版块</th><th>版主 </th><th>最后发帖 </th><th>最热帖子 </th>
                <?php
                 //First i need to take some data from $db_zonedb.
                 //Then use CSS and HTML to show them
                 //My English isn't 100% fluent,but I am trying to improve it.
                ?>
                <tr><td>新闻资讯<h6>在这里你可以了解一些正在发生的事情</h6></td><td>Neoxy</td><td>2017/8/3</td><td>[新闻]大刀发誓，誓死不污！</td></tr>
                <tr><td>软件资源<h6>毁三观板块</h6></td><td>大刀同志</td><td>2017/8/3</td><td>[预发布]popcorn 0.0.0.1</td></tr>
            </table>
        </div>
    </div>
<?php
LoadBody_End("","..");
?>