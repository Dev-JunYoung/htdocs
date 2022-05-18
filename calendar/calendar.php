
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
.all { border-width:1; border-color:#cccccc; border-style:solid; }
font {font-family:굴림체; font-size: 12px; color:#505050;}
font.title {font-family: 굴림체; font-size: 12px; font-weight: bold; color:#2579CF;}
font.week {font-family:돋움,돋움체; color:#ffffff;font-size:8pt;letter-spacing:-1}
font.num {font-family:tahoma; font-size:20px;}
font.holy {font-family:tahoma; font-size:20px; color:#FF6C21;}
font.num2 {font-family:tahoma; font-size:14px; color:#bbbbbb;}
font.num3 {font-family:tahoma; font-size:14px; color:blue;}
font.num4 {font-family:tahoma; font-size:14px;} 
font.num5 {font-family:tahoma; font-size:14px; color:green;}
font.num6 {font-family:tahoma; font-size:14px; color:red;}
.main { float:left; width: 70%; border:5px solid #ccc; background-color:#fff; m }
.right { float:right; width: 20%; background-color:#fff; border:5px solid #eee; }

</style>
</head>
<body>
<?
//--------------------------------------------------------------------
//  PREVIL Calendar
//
//  - calendar.php / lun2sil.php(open source)
//
//  - Programmed by previl(previl@hanmail.net, http://dev.previl.net)
//  
//--------------------------------------------------------------------

if(!$c_path) $c_path=".";
if(!$cellh) $cellh  = 100;  // date cell height
if(!$tablew) $tablew = 800; //table width
?>
 


<div class = main>
<?
//--------------------------------------------------------------------
//  FUNCTION
//--------------------------------------------------------------------
include "lun2sol.php";   //양음변환 인클루드
//include "schedule.php"; 





function ErrorMsg($msg)
{
  echo " <script>                ";
  echo "   window.alert('$msg'); ";
  echo "   history.go(-1);       ";
  echo " </script>               ";
  exit;
}

function SkipOffset($no,$sdate='',$edate='')
{  
  for($i=1;$i<=$no;$i++) { 
    $ck = $no-$i+1;
    if($sdate) $num = date('m/d',$sdate-(3600*24)*$ck);
	if($edate) $num = date('m/d',$edate+(3600*24)*($i-1)); 
	
    echo "  <TD valign=top><font class=num2>$num</font></TD> \n";	
  }
}



//---- 오늘 날짜
$thisyear  = date('Y');  // 2000
$thismonth = date('n');  // 1, 2, 3, ..., 12
$today     = date('j');  // 1, 2, 3, ..., 31

//------ $year, $month 값이 없으면 현재 날짜
if (!$year=$HTTP_GET_VARS['year']) $year = $thisyear;
if (!$month=$HTTP_GET_VARS['month']) $month = $thismonth;
if (!$day=$HTTP_GET_VARS['day']) $day = $today;
$neodate=$HTTP_GET_VARS['neodate'];

//------ 날짜의 범위 체크
if (($year > 2038) or ($year < 1900)) ErrorMsg("연도는 1900~2038년만 가능합니다.");
if (($month > 12) or ($month < 0)) ErrorMsg("달은 1~12만 가능합니다.");
/*
while (checkdate($month,$day,$year)): 
    $date++; 
endwhile; 
$maxdate = date-1;
*/
$maxdate = date(t, mktime(0, 0, 0, $month, 1, $year));   // the final date of $month

if ($day>$maxdate) ErrorMsg("$month 월 에는 $lastday 일이 마지막 날입니다.");

$prevmonth = $month - 1;
$nextmonth = $month + 1;
$prevyear = $nextyear=$year;
if ($month == 1) {
  $prevmonth = 12;
  $prevyear = $year - 1;
} elseif ($month == 12) {
  $nextmonth = 1;
  $nextyear = $year + 1;
}
/****************** lunar_date ************************/
	$predate = date("Y-m-d", mktime(0, 0, 0, $month-1, 1, $year)); //속도를 위해 조회하는 전후 한달만 select
	$nextdate= date("Y-m-d", mktime(0, 0, 0, $month+1, 1, $year)); //속도를 위해 조회하는 전후 한달만 select
	
	$connect=mysql_connect("localhost","root","3612");
	
    mysql_select_db("one");
	mysql_query("SET NAMES 'utf8'");
	$sql = "SELECT `solar_date`,`memo`,`ganji`,`lunar_date` FROM `g4_lunartosolar` where `solar_date` between '$predate' and '$nextdate' ";
	$sql2 ="SELECT * FROM `schedular`" ;
		
	
	$result=mysql_query($sql,$connect) or die (mysql_error());
	$result2=mysql_query($sql2,$connect) or die (mysql_error());
	
	while ($array=mysql_fetch_array($result)) {
		$schedule[] = array(0=>date("n-j", strtotime($array[solar_date])), 1=>$array[ganji], 2=>date("n-j", strtotime($array[lunar_date])),3=>date("j", strtotime($array[lunar_date])));
	}
/****************** lunar_date ************************/

/****************** schedule ************************/
	while ($array=mysql_fetch_array($result2)) {
	    //$select_val = substr($array[$select_val],0, 8);
		$schedule1[] = array(0=>date("n-j", mktime(0,0,0,$array[start_month],$array[start_date],$array[start_year])), 1=>$array[subject], 2=>$array[contents],3=>substr(trim($array[select_val]),0,3),4=>$array[id],5=> date("n-j", mktime(0,0,0,$array[end_month],$array[end_date],$array[end_year])),6=>$array[etc]  );
    }
/****************** schedule ************************/


/****************** 휴일 정의 ************************/
$HOLIDAY = Array();
$HOLIDAY[] = array(0=>'1-1',1=>'신정'); 
$HOLIDAY[] = array(0=>'3-1',1=>'삼일절');
//$HOLIDAY[] = array(0=>'4-5',1=>'식목일');
$HOLIDAY[] = array(0=>'5-5',1=>'어린이날');
$HOLIDAY[] = array(0=>'6-6',1=>'현충일');
$HOLIDAY[] = array(0=>'7-17',1=>'제헌절');
$HOLIDAY[] = array(0=>'8-15',1=>'광복절');
$HOLIDAY[] = array(0=>'10-3',1=>'개천절');

$HOLIDAY[] = array(0=>'12-25',1=>'성탄절');

$tmp = lun2sol($year."0101");   //설날
$HOLIDAY[] = array(0=>date("n-j",($tmp-(3600*24))),1=>'설날');
$HOLIDAY[] = array(0=>date("n-j",$tmp),1=>'설날');
$HOLIDAY[] = array(0=>date("n-j",($tmp+(3600*24))),1=>'설날');;

$tmp = lun2sol($year."0408");   //석탄일
$HOLIDAY[] = array(0=>date("n-j",$tmp),1=>'석탄일');

$tmp = lun2sol($year."0815");   //추석
$HOLIDAY[] = array(0=>date("n-j",($tmp-(3600*24))),1=>'추석');;
$HOLIDAY[] = array(0=>date("n-j",$tmp),1=>'추석');;
$HOLIDAY[] = array(0=>date("n-j",($tmp+(3600*24))),1=>'추석');;

unset($tmp);

/****************** 휴일 정의 ************************/
$time = time();
$year1 = date("Y", $time);
$month1 = date("m", $time);

// Style에서 띄어쓰면 안됨
echo("
<DIV align=center>
<TABLE cellSpacing=0 cellPadding=0 width=$tablew border=0>
	<TR>
		<TD width=1></TD><TD align=center>
			<TABLE cellSpacing=0 cellPadding=0 width=90% border=0 height=11>  
			<TR>
				<TD width=1%></TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=14% align=center valign=bottom><img src='$c_path/img/box_top_line1.gif' width=5 height=3>
				</TD>
				<TD width=1%></TD>
			</TR>
			</TABLE>
		</TD>
			<TD width=1>
			</TD>
	</TR>
</TABLE>

<TABLE cellSpacing=0 cellPadding=0 width=$tablew border=0 class=all>
	<TR>
		<TD height=13 background='$c_path/img/box_top_bg.gif' align=center>
			<TABLE cellSpacing=0 cellPadding=0 width=90% border=0 height=13>  
			<TR>
				<TD width=1%></TD>  
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=14% align=center valign=top><img src='$c_path/img/box_top_line2.gif' width=5 height=7>
				</TD>
				<TD width=1%>
				</TD>
			</TR>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD align=center>
			<TABLE cellSpacing=0 cellPadding=0 width=90% border=0>
				<TR><TD height=3></TD></TR>   
				<TR><TD height=1 colspan=3 bgcolor=efefef></TD></TR>
				<TR><TD height=3></TD></TR>
				<TR><TD width=15% align=right>
					<a href=$PHP_SELF?year=$prevyear&month=$prevmonth&day=1 onfocus='this.blur()'>
					<img src='$c_path/img/back.png' border=0 onfocus='this.blur();' align=right width=20 height=20></a>        
				</TD>
			<TD width=10% align=center>
				<font class=title>{$year}년 {$month}월</font>
            </TD>
			<TD width=15% align=left>
				<a href=$PHP_SELF?year=$nextyear&month=$nextmonth&day=1 onfocus='this.blur()'>
				<img src='$c_path/img/next.png' border=0 onfocus='this.blur();' align=left width=20 height=20></a>
	        </TD>
			<td width = 7%>
			<a href=$PHP_SELF?year=$year1&month=$month1&day=1 onfocus='this.blur()'>
			<img src='$c_path/img/today.png' border=0 onfocus='this.blur();' align=left width=40 height=20></a>
			
		</TR>		
		</TABLE>
    </TD>
</TR>
<TR><TD height=3></TD></TR>
<TR><TD align=center>
        <TABLE cellSpacing=0 cellPadding=0 width=90% border=1>  
		<TR>
		    <TD bgcolor=#68AFF7><TABLE cellSpacing=0 cellPadding=0 width=1 height=1 border=0>
				<TR><TD bgcolor=ffffff></TD></TR></TABLE></TD>
		    <TD colspan=7 bgcolor=#68AFF7 height=1></TD>
			<TD bgcolor=#68AFF7 align=right><TABLE cellSpacing=0 cellPadding=0 width=1 height=1 order=0>
				<TR><TD bgcolor=ffffff></TD></TR>
		</TABLE>
	</TD>
</TR>
<TR><TD colspan=9 bgcolor=#68AFF7 height=3></TD></TR>
	<TR bgcolor=#68AFF7>
	    <TD width=1%></TD>
		<TD width=14% align=center><font class=week>일</font></TD>            
		<TD width=14% align=center><font class=week>월</font></TD>
		<TD width=14% align=center><font class=week>화</font></TD>
		<TD width=14% align=center><font class=week>수</font></TD>
		<TD width=14% align=center><font class=week>목</font></TD>
		<TD width=14% align=center><font class=week>금</font></TD>
		<TD width=14% align=center><font class=week>토</font></TD>
		<TD width=1%></TD>
    </TR>
	<TR>
		<TD colspan=9 bgcolor=#68AFF7 height=1></TD></TR>
	<TR>
		<TD bgcolor=#68AFF7>
			<TABLE cellSpacing=0 cellPadding=0 width=1 height=1 border=0>
				<TR><TD bgcolor=ffffff></TD></TR>
			</TABLE></TD>
		<TD colspan=7 bgcolor=#68AFF7 height=1></TD>
		<TD bgcolor=#68AFF7 align=right>
			<TABLE cellSpacing=0 cellPadding=0 width=1 height=1 order=0>
				<TR><TD bgcolor=ffffff></TD></TR>
			</TABLE>
		</TD>
	</TR>
");

echo("
		<TR height=$cellh><TD></TD>
        <!-- 날짜 테이블 -->
");

$date   = 1;
$offset = 0;
$ck_row=0; //프레임 사이즈 조절을 위한 체크인자
$print = array();

while ($date <= $maxdate) {   
   if ($date < 10) $date2 = "&nbsp;".$date;
   else $date2 = $date;
  
  if($date == '1') {
    $offset = date('w', mktime(0, 0, 0, $month, $date, $year));  // 0: sunday, 1: monday, ..., 6: saturday
    SkipOffset($offset,mktime(0, 0, 0, $month, $date, $year));
   }
   if($offset == 0) $style ="holy";
   else $style = "num";
   
   for($i=0;$i<count($HOLIDAY);$i++){	   
       if($HOLIDAY[$i][0] =="$month-$date") {
		   $style="holy"; 
		   $holy_text = $HOLIDAY[$i][1];
		   //$date2 = "<font title='{$month}월 {$date}일은 ".$holy_text." 입니다' class='$style' style=cursor:point>$date2 </br> $holy_text</font>";    
		   $date2 = "$date2 <nbsp;> $holy_text";  
		   //$print = array(0=>$date, 1=>$holy_text);
		   break;
       }	   
   }
   for($i=0;$i<count($schedule);$i++){	   
       if($schedule[$i][0] =="$month-$date") {
		   $lunar_text = $schedule[$i][2];
		   //$date2 = "<font title='{$month}월 {$date}일은 ".$holy_text." 입니다' class='$style' style=cursor:point>$date2 </br> $holy_text</font>";    
		   switch($schedule[$i][3])
			{
				case 1: 
					$date3 = "(음:$lunar_text)</br>";  
					//$print[3] = array(
				break;
				
				case 15:
					$date3 = "(음:$lunar_text)</br>";  
				break;	
		    
		   }
		   break;
       }	   
   }
   
   for($i=0;$i<count($schedule1);$i++){	   
       if($schedule1[$i][0] =="$month-$date") {
		   $select = $schedule1[$i][3];
		   $subject = $schedule1[$i][1];
		   //$id = $schedule1[$i][4];
		   $etc = $schedule1[$i][6];
		   
		/*  switch ($etc) {
		   	case 1:
		   	$date4 = "<font title='".$schedule1[$i][2]."' class='num4' style=cursor:point>[$select]$subject</font></br>"; 
		   	break;
		   	
		   	case 2:
		   		$date5 = "<font title='".$schedule1[$i][2]."' class='num5' style=cursor:point>[$select]$subject</font></br>"; 	
		  	break;
		  }
		*/
		  
		  if($etc ==1){
			$date4 = "<font title='".$schedule1[$i][2]."' class='num4' style=cursor:point>[$select]$subject</font></br>"; 
			$id = $schedule1[$i][4];
		    }
		   
		 if ($etc ==2){
			$date5 = "<font title='".$schedule1[$i][2]."' class='num5' style=cursor:point>[$select]$subject</font></br>"; 
			$id1 = $schedule1[$i][4];
			}  		  
		if ($etc ==3){
			$date6 = "<font title='".$schedule1[$i][2]."' class='num6' style=cursor:point>[$select]$subject</font></br>"; 
			$id2 = $schedule1[$i][4];
			}  	
       }
     }	   
	 /*
	 for($i=0;$i<count($schedule1);$i++){	   
		 if($schedule1[$i][0] =="$month-$date") {
		   $select = $schedule1[$i][3];
		   $subject = $schedule1[$i][1];
		   $id1 = $schedule1[$i][4];
		   $etc = $schedule1[$i][6];
		   
		   switch ($etc) {
		   	case 1:
		   	$date4 = "<font title='".$schedule1[$i][2]."' class='num4' style=cursor:point>[$select]$subject</font></br>"; 
		   	break;
		   	
		   	case 2:
		   		$date5 = "<font title='".$schedule1[$i][2]."' class='num5' style=cursor:point>[$select]$subject</font></br>"; 	
		  	break;
		   } 
		  
		  
		  
		  if($etc ==2){
			$date5 = "<font title='".$schedule1[$i][2]."' class='num5' style=cursor:point>[$select]$subject</font></br>"; 
		  }  
		
		}
		}
  	*/
 
   if(!$offset==0 ){
   $print[] = array(0=>$date, 1=>$holy_text, 2=>$date3 , 3=>$date4, 4=>$date5, 5=>$date6);
   }
   
   
   if ( $date == $today  &&  $year == $thisyear &&  $month == $thismonth) {
    
   echo "<TD valign=top bgcolor=#99FFFF ><font class=$style>$date2</font></br><font class=num3>$date3</font><font class=num4><a href=read.php?id=$id>$date4</a></font><font class=num5><a href=read.php?id=$id1>$date5</a></font><font class=num6><a href=read.php?id=$id2>$date6</a></font></TD> \n";
   }
   else echo "<TD valign=top><font class=$style >$date2</font></br><font class=num3>$date3</font><font class=num4><a href=read.php?id=$id>$date4</a></font><font class=num5><a href=read.php?id=$id1>$date5</a></font><font class=num6><a href=read.php?id=$id2>$date6</a></font></TD> \n";
  
	$date3="";
	$date4 = "";
	$date5 ="";
	$date6="";
	$date++;
	$offset++;
    $holy_text = ""; 
  if ($offset == 7) {
    echo "<TD></TD></TR> \n";
    if ($date <= $maxdate) {
      echo "<TR height=$cellh><TD valign=top></TD>\n";
	  $ck_row++;
    }
    $offset = 0;
  }

} // end of while

if ($offset != 0) {
  SkipOffset((7-$offset),'',mktime(0, 0, 0, $month+1, 1, $year));
  echo "<TD></TD></TR> \n";
}
echo("
<!-- 날짜 테이블 끝 -->
        </TD>
     </TR>
	 </TABLE>
<TR><TD height=3></TD></TR>
</TABLE>
</DIV>
") ;

?>

<div align = center >
<? 
echo "</br>";
echo "</br>";
echo "<a href=calendar/write.php?year=$year&month=$month><img src='/calendar/img/sch.png' width=80 height=30 ></a> ";

//foreach($print as $value) echo $value." , ";
?>
</div>
</div>

<div class = right>

<?
echo "</br>";
 echo "<table border = 1><tr><td width  = 40>날짜</td>";
 echo "<td width  = 100>휴가</td></tr>";
for($i=0;$i<count($print);$i++) {
if(!$print[$i][3] =="" or !$print[$i][4] =="" or !$print[$i][5] ==""){
  
    echo "<tr><td>"; 
	echo $print[$i][0] ."</td><td >"; 

	echo $print[$i][3].$print[$i][4].$print[$i][5]   ;
	echo "</td></tr>";

}
}
echo "</table>";

?>
</div>
<div>


</div>

	
</body>
</html>
