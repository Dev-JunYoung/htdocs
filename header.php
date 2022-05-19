
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

    <!-- Favicons 
  <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
-->


<style>
  .body{
    position:fixed;
    
  }
  *{

  }
  #title{
    text-align: center;
  }
  div#custom_table{
      margin-left=100px;
  }
.left{
  flex: 1;
}
.center{
  flex: 5;
}
.right{
  flex: 1;
}
.wrapper {
  display: flex;
}
.table_wrapper{
    margin-left:200px;
    margin-right:200px;
}

</style>
<link rel="stylesheet" href="css/style.css">
    
    <!-- Custom styles for this template -->
  </head>
  <body>
  <div class="b-example-divider"></div>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <button type="button" class="btm_image" id="img_btn"><img src=https://teamnova.co.kr/images/nova.png></button>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

        <li><a href="havruta.php" class="nav-link px-2 text-white">질문/하브루타</a></li>
            <li><a href="itnews.php" class="nav-link px-2 text-white">게시판</a></li>
            <li><a href="notice.php" class="nav-link px-2 text-white">공지사항</a></li>
            <li><a href="mypage.php" class="nav-link px-2 text-white">my page</a></li>      
        </ul>


        <div class="text-end">
          로그인 되어있으면 아이디를 보여주고, 안되어있으면 회원가입,로그인 버튼
          <?php 
    
          ?>
          <button type="button" onclick="location.href='login.php'" class="btn btn-outline-light me-2">Login</button>
          <button type="button" onclick="location.href='signup.php'" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  <div class="b-example-divider"></div>
  <!-- 헤더 -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>
