<?php include("Mysql_Util.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel=stylesheet type="text/css" href="../css/news_center.css">
        <title>News Center</title>
    </head>
    
    <body>
        <div id="main-content">
           
            <div id="header">
                <div id="header_left"></div> 
                <div id="header_right">
                    <div id="header_right_item">新聞中心</div>
                </div> 
            </div>
            
            <div id="toolbar">
                <div id="site-id">
                    <a href="index.html" style="color:white;text-decoration: none">原力機電股份有限公司</a>
                </div>
                <div id="energy-bar">
                <!-- Unfinished -->  
                </div>
                <div id="english-contact">
                    <a href="index.html" style="color:white;text-decoration: none">►&nbsp;&nbsp;English</a>
                </div>
                    
                <div id="search">
                    <form action="http://www.google.com/search" target="_blank">
                        <input type="hidden" name="sitesearch" value="" />
                        <input alt="search" type="text" value="搜尋" style="width:150px" name="as_q" size="20" />
                        <input id="toolboxsubmit"  type="submit" value="Go">
                    </form>
                </div>       
            </div>
            
            <div id="content"> 
                <div id="blank"></div>
                <div id="middle">
                    <div id="middle_top">
                        <a href="index.html" style="color: crimson; font-size: 80%;">&nbsp;＞&nbsp; </a><a href="index.html" style="color:black; font-size: 80%;">原力機電&nbsp;</a><a href="index.html" style="color: crimson;  font-size: 80%;" >＞&nbsp; </a><a href="index.html" style="color: crimson; font-size: 80%;">新聞中心</a>
                    </div>
                    <div id="middle_topic">
                        <p style="font-size:120%;font-weight: bold;">新聞稿</p>
                    </div>
                    <div id="middle_news">
                        <hr style="border: 1px dashed #ccc; width: 100%; float:left;">
                        <?php
                            $result = show_news();
                            while($row = @mysql_fetch_row($result)){
                            echo "<a href='$row[2]' id='news'><img src='../img/pdf.png' height=18px; width=18px;>&nbsp;$row[1]|$row[0]</a><br><br>";
                        }
                        ?>
                 
                    </div>
                    <div id="middle_bottom">
                        <hr style="border: 1px dashed #ccc; width: 100%; float:left;">
                        <h5>新聞聯絡人:</h5>
                        <p style="font-size: 80%;color:gray">
                            姓名<br>
                            地址<br>
                            企業傳播事務處<br><br>
                            地址<br>
                            電話:<br>
                            傳真:<br>
                        </p>
                        <hr style="border: 1px dashed #ccc; width: 100%; float:left;">
                    </div>
                </div>
                <div id="middle_blank"></div>
                <div id="right">
                    <h5>相關連結</h5>
                    <div style="margin-bottom:10px;">
                         <a href="../page/news_center.html" style="color:red; font-size: 80%;">&nbsp;＞&nbsp; </a>
                         <a href="../page/news_center.html" style="color:blue;">新聞中心</a><br>
                    </div>
                    <div style="margin-bottom:10px;">
                         <a href="../page/about_us.html" style="color:red; font-size: 80%;">&nbsp;＞&nbsp; </a>
                         <a href="../page/about_us.html" class="news_menu">關於原力機電</a><br>
                    </div>
                    <div style="margin-bottom:10px;">
                         <a href="../page/partner.html" style="color:red; font-size: 80%;">&nbsp;＞&nbsp; </a>
                         <a href="../page/partner.html" class="news_menu">合作夥伴</a><br>
                    </div>
                    <div style="margin-bottom:10px;">
                         <a href="index.html" style="color:red; font-size: 80%;">&nbsp;＞&nbsp; </a>
                         <a href="index.html" class="news_menu">招募專才</a><br>
                    </div>
                    <div style="margin-bottom:10px;">
                         <a href="index.html" style="color:red; font-size: 80%;">&nbsp;＞&nbsp; </a>
                         <a href="index.html" class="news_menu">地域實例</a><br>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div id="footer">
            <a href="index.html" style="color:darkgrey;" class="footer_text">copyright</a>
            <span>|</span>
            <a href="index.html" style="color:darkgrey;" class="footer_text">inprint</a>
            <span>|</span>
            <a href="index.html" style="color:darkgrey;" class="footer_text">privacypolicy</a>
            <span>|</span>
            <a href="index.html" style="color:darkgrey;" class="footer_text">termsofuseblock</a>
            <span>|</span>
            <a href="index.html" style="color:darkgrey;" class="footer_text">digitalidblock</a>
        </div>
    </body>
</html>