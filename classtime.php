<?php
//---- 오늘 날짜
$thisyear = date('Y'); // 4자리 연도
$thismonth = date('n'); // 0을 포함하지 않는 월
$today = date('j'); // 0을 포함하지 않는 일

//------ $year, $month 값이 없으면 현재 날짜
$year = isset($_GET['year']) ? $_GET['year'] : $thisyear;
$month = isset($_GET['month']) ? $_GET['month'] : $thismonth;
$day = isset($_GET['day']) ? $_GET['day'] : $today;

$prev_month = $month - 1;
$next_month = $month + 1;
$prev_year = $next_year = $year;
if ($month == 1) {
    $prev_month = 12;
    $prev_year = $year - 1;
} else if ($month == 12) {
    $next_month = 1;
    $next_year = $year + 1;
}
$preyear = $year - 1;
$nextyear = $year + 1;

$predate = date("Y-m-d", mktime(0, 0, 0, $month - 1, 1, $year));
$nextdate = date("Y-m-d", mktime(0, 0, 0, $month + 1, 1, $year));

// 1. 총일수 구하기
$max_day = date('t', mktime(0, 0, 0, $month, 1, $year)); // 해당월의 마지막 날짜
//echo '총요일수'.$max_day.'<br />';

// 2. 시작요일 구하기
$start_week = date("w", mktime(0, 0, 0, $month, 1, $year)); // 일요일 0, 토요일 6

// 3. 총 몇 주인지 구하기
$total_week = ceil(($max_day + $start_week) / 7);

// 4. 마지막 요일 구하기
$last_week = date('w', mktime(0, 0, 0, $month, $max_day, $year));
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta name="generator" content="Hugo 0.98.0">
    <title>공지사항</title>    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
            font.holy {font-family: tahoma;font-size: 20px;color: #FF6C21;}
    font.blue {font-family: tahoma;font-size: 20px;color: #0000FF;}
    font.black {font-family: tahoma;font-size: 20px;color: #000000;}
    </style>
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body>
  <?php include("header.php"); ?>

  <main>
  <!--왼 | 중앙 | 오른 -->
  <div class="wrapper">
  <div class="left">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">시간표</span>
    </a>
    <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="notice.php" class="nav-link text-white" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="notice.php"/></svg>
              사무실 관련 공지
            </a>
          </li>
          <li>
            <a href="pay.php" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="pay.php"/></svg>
              수강결제
            </a>
          </li>
          <li>
            <a href="classtime.php" class="nav-link active">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="classtime.php"/></svg>
              시간표
            </a>
          </li>
        </ul>
        <hr>
    </div>
    </div>
    <div class="center">
    <div id="title">  
            <h1>수강시간표</h1>     
    </div>     
    <div class="container">
<table class="table table-bordered table-responsive">
  <tr align="center" >
    <td>
        <a href=<?php echo 'classtime.php?year='.$preyear.'&month='.$month . '&day=1'; ?>>◀◀</a>
    </td>
    <td>
        <a href=<?php echo 'classtime.php?year='.$prev_year.'&month='.$prev_month . '&day=1'; ?>>◀</a>
    </td>
    <td height="50" bgcolor="#FFFFFF" colspan="3">
        <a href=<?php echo 'classtime.php?year=' . $thisyear . '&month=' . $thismonth . '&day=1'; ?>>
        <?php echo "&nbsp;&nbsp;" . $year . '년 ' . $month . '월 ' . "&nbsp;&nbsp;"; ?></a>
    </td>
    <td>
        <a href=<?php echo 'classtime.php?year='.$next_year.'&month='.$next_month.'&day=1'; ?>>▶</a>
    </td>
    <td>
        <a href=<?php echo 'classtime.php?year='.$nextyear.'&month='.$month.'&day=1'; ?>>▶▶</a>
    </td>
  </tr>
  <tr class="info">
    <th hight="30">일</td>
    <th>월</th>
    <th>화</th>
    <th>수</th>
    <th>목</th>
    <th>금</th>
    <th>토</th>
  </tr>

  <?php
    // 5. 화면에 표시할 화면의 초기값을 1로 설정
    $day=1;

    // 6. 총 주 수에 맞춰서 세로줄 만들기
    for($i=1; $i <= $total_week; $i++){?>
  <tr>
    <?php
    // 7. 총 가로칸 만들기
    for ($j = 0; $j < 7; $j++) {
        // 8. 첫번째 주이고 시작요일보다 $j가 작거나 마지막주이고 $j가 마지막 요일보다 크면 표시하지 않음
        echo '<td height="50" valign="top">';
        if (!(($i == 1 && $j < $start_week) || ($i == $total_week && $j > $last_week))) {

            if ($j == 0) {
                // 9. $j가 0이면 일요일이므로 빨간색
                $style = "holy";
            } else if ($j == 6) {
                // 10. $j가 0이면 토요일이므로 파란색
                $style = "blue";
            } else {
                // 11. 그외는 평일이므로 검정색
                $style = "black";
            }

            // 12. 오늘 날짜면 굵은 글씨
            if ($year == $thisyear && $month == $thismonth && $day == date("j")) {
                // 13. 날짜 출력
                echo '<font class='.$style.'>';
                echo $day;
                echo '</font>';
            } else {
                echo '<font class='.$style.'>';
                echo $day;
                echo '</font>';
            }
            // 14. 날짜 증가
            $day++;
        }
        echo '</td>';
    }
 ?>
  </tr>
  <?php } ?>
</table>
</div>
  </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<div class="right"></div>
</div>
  </body>
</html>
  