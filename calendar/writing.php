<? 
function left($string, $count){
return substr($string, 0, $count);
}


	$connect=mysql_connect("localhost","root","3612");
	
    mysql_select_db("one");
	mysql_query("SET NAMES 'utf8'");
 $start_date1=$_POST['start_date1'];
 $start_date2=$_POST['start_date2'];
 $start_date3=$_POST['start_date3'];
 $contents = $_POST['contents'];
 $subject = $_POST['subject'];
 $writing_date = date('Y-m-d-H-i');
 $select_val = $_POST['select_val'];
 $etc =$_POST['etc'];
 $end_date1=$_POST['end_date1'];
 $end_date2=$_POST['end_date2'];
 $end_date3=$_POST['end_date3'];
 
 $time1 = mktime(0,0,0,$start_date2,$start_date3,$start_date1);
 $time2 = mktime(0,0,0,$end_date2,$end_date3,$end_date1);
 
// $select_val = left($select_val, 2);
 $contents = "[".$select_val."] " .$contents ;
 
 if($time1==$time2){
  //mysql_query("insert into schedular (writing_date, start_year, start_month, start_date, contents, subject, select_val, etc , end_year, end_month, end_date) values ('$writing_date','$start_date1','$start_date2','$start_date3','$contents','$subject','$select_val','$etc','$end_date1','$end_date2','$end_date3',)", $connect) or die(mysql_error());
 mysql_query("insert into schedular 
			(writing_date, start_year, start_month,start_date, contents, subject, select_val, etc,end_year, end_month, end_date) values ('$writing_date','$start_date1', '$start_date2','$start_date3', '$contents', '$subject','$select_val','$etc','$end_date1','$end_date2','$end_date3')", $connect) or die(mysql_error()); 
 }
 else {
    $tmp = ($time2-$time1)/(3600*24);
	
	for($i=0;$i<=$tmp;$i++){
	$start_date3 = $start_date3 + $i;
	mysql_query("insert into schedular 
			(writing_date, start_year, start_month,start_date, contents, subject, select_val, etc,end_year, end_month, end_date) values ('$writing_date','$start_date1', '$start_date2','$start_date3', '$contents', '$subject','$select_val','$etc','$end_date1','$end_date2','$end_date3')", $connect) or die(mysql_error()); 
    $start_date3 = $start_date3 - $i;
	}
	
 }
 
 //echo $time1. "</br>";
 //echo $time2. "</br>";
// echo $time2-$time1. "</br>";
// echo $tmp;
 //header("location:calendar.php");
 header("location:calendar.php");
?>