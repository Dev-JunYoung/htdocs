<?
$connect=mysql_connect("localhost","root","3612");
	
    mysql_select_db("one");
	mysql_query("SET NAMES 'utf8'");
	
$id=$_GET['id'];
$etc = "4";
    
   //$sql ="UPDATE `one`.`schedular` SET `etc` = '4' where `id`=$id";
	//$sql = "UPDATE `one`.`schedular` SET `etc` = '4' WHERE `schedular`.`id` = $id";
   $sql = "UPDATE `one`.`schedular` SET `etc` = '$etc' WHERE `schedular`.`id` = '$id'";	
	$result=mysql_query($sql,$connect) or die (mysql_error());
	
	
	//echo $id."</br>";
	//echo $etc;
    header("location:year_schedule");	
?>

