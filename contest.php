
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>자유게시판</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<style>
</style>
<link rel="stylesheet" href="css/style.css">
    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
  <body>
  <?php include("header.php"); ?>
  <!-- 헤더 -->
  
  <!--왼 | 중앙 | 오른 -->
  <div class="wrapper">
    <div class="left">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">게시판</span>
    </a>
    <hr>
 
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="itnews.php" class="nav-link text-white" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              IT 뉴스
            </a>
          </li>
          <li>
            <a href="contest.php" class="nav-link active">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              대회 소식
            </a>
          </li>
          <li>
            <a href="completed.php" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              수료자 취업소식
            </a>
          </li>
        </ul>
        <hr>
  
    </div>
    </div>
    <div class="center">
    <div id="title">  
            <h1>대회소식</h1>          
  </div>  
    <div class="custom_table">
                <table class="table table-hover" >
                  <thead>
                    <th width="50px">번호</th>    <th width="600px">제목</th>    <th width="150px">작성자</th> <th width="100px">작성일</th><th width="70px">조회수</th>   <!--<th>작성자</th>-->
                  </thead>
                  <tbody>
                    <tr><!-- 첫번째 줄 시작 -->
                        <td>0</td>
                        <td>제목 칸</td>
                        <td>작성자 칸</td>
                        <td>작성일 칸</td>
                        <td>11</td>
                    </tr><!-- 첫번째 줄 끝 -->                
                  </tbody>                
                  </table>          
    </div>
    <button style="margin-left:1230px" type="button" class="btn btn-success" onclick="location.href='register_board.php'" >글쓰기</button>
    </div>
    
    <div class="right"></div>
  </div>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>
