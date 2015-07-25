<?php 

include("Mysql_Util.php");

$date = $_POST['date'];
$title = $_POST['title'];
$site = $_POST['site'];
echo $date . $title . $site;

if($title != null && $date != null && $site != null)
{
        //新增資料進資料庫語法
        $sql = add_news($title, $date, $site);
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=add_news.php>';
        }
        else
        {
                echo '新增失敗!';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}

?>
