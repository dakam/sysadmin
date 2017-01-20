
<?php


        $db_user="damiano";
        $db_pass="damiano";
        $db_host="localhost";
        $db_name="wordpress";

        $link = mysql_connect($db_host,$db_user,$db_pass) or die("DB ERROR: " . mysql_error());
        
        mysql_select_db($db_name, $link) or die(mysql_error());

         $sql="select * from wp_posts  order by rand() limit 6 ";
         $res=mysql_query($sql);


         while($r=mysql_fetch_array($res))
{

$dt= date('Y-m-d h:s:i');

$articleid=$r["ID"];

$sql2="UPDATE wp_posts set post_modified='$dt' where ID =$articleid";
 $res2=mysql_query($sql2);




$comm= "Where nice article!";
$sql3="insert into  wp_comments(comment_content,comment_post_ID) values ('$comm', $articleid)";
 
$res3 = mysql_query($sql3);



}



?>

