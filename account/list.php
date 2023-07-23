<?php
include '../template.php';
LoadHead_First("用户列表");
LoadInclude("../");
LoadHead_End();
LoadBody_First();
LoadStyle_Main("Neoxy's World","../");
?>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                include '../connect.php';

                $sql="select MAX(id) from $db_userdb";
                $result = mysqli_query($mysqli,$sql);
                $row_data=mysqli_fetch_array($result);
                $max_id=$row_data[0];
                $max_id_str= $max_id+1;
                echo "共有".$max_id_str."个小伙伴，加入到了我们的大家庭。</br>";
                for ($i=0;$i<=$max_id;$i++)
                {
                    $sql = "SELECT name FROM $db_userdb WHERE id=$i";
                    $result = mysqli_query($mysqli,$sql);
                    $row_data=mysqli_fetch_assoc($result);
                    echo $row_data["name"]."</br>";

                }
                ?>
                    <a href="index.php">回到用户中心</a>
            </div>
        </div>
    </div>
<?php
LoadBody_End("","..");
?>