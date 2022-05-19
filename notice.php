
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>공지사항</title>    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
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
      <span class="fs-4">공지사항</span>
    </a>
    <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="notice.php" class="nav-link active" aria-current="page">
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
            <a href="classtime.php" class="nav-link text-white">
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
            <h1>공지사항</h1>     
    </div>     
  </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<div class="right"></div>
</div>
  </body>
</html>
