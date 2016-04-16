<?php  session_start();?>
<?php header("Content-Type:text/html;charset=utf-8");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=天辰人力-".date('Y-m-d',time()).".xls");
header("Pragma: no-cache");
header("Expires: 0");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['user'])){
    header("Location:login.html");
    exit();
}
include("conn.php");
?>
<?php
// 转载请注明phpteam
$title = "数据库:天辰人力资源信息, 数据表:用户信息, 备份日期:" . date("Y-m-d H:i:s");
include("conn.php");
@mysql_select_db("tianchen", $conn);
echo '<table border="1" cellspacing="2" cellpadding="2" width="50%" align="center">';
// 输出标题
echo '<tr bgcolor="#cccccc"><td colspan="3" align="center">' . $title . '</td></tr>';

$query = "select * from users";
$result = mysql_query($query) or die(mysql_error());
$fields = mysql_num_fields($result);
// 输出字段名
echo '<tr>';
for($i = 0; $i < 7; $i++) {
    echo '<td>' . mysql_field_name($result, $i) . '</td>';
}
echo '</tr>';
// 输出内容
while($row = mysql_fetch_row($result)) {
    echo '<tr>';
    for($i = 0; $i<7; $i++) {
        echo '<td>' 
        . $row[$i] . 
        '</td>';

    }
    
    echo '</tr>';
}
echo '</table>';
?>