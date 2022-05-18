
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
  flex: 3;
}
.right{
  flex: 1;
}
.wrapper {
  display: flex;
}

</style>
<link rel="stylesheet" href="css/style.css">
    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
    <script type="text/javascript" src="dist/js/service/HuskyEZCreator.js" charset="utf-8"></script>
    


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
            <li><a href="freeboard.php" class="nav-link px-2 text-white">게시판</a></li>
            <li><a href="notice.php" class="nav-link px-2 text-white">공지사항</a></li>
            <li><a href="mypage.php" class="nav-link px-2 text-white">my page</a></li>      
        </ul>


        <div class="text-end">
          <button type="button" onclick="location.href='login.php'" class="btn btn-outline-light me-2">Login</button>
          <button type="button" onclick="location.href='signup.php'" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  <div class="b-example-divider"></div>
  <!-- 헤더 -->
  <div id="title">  
            <h1>게시판 글작성</h1>          
  </div>  
  <!--왼 | 중앙 | 오른 -->
  <div class="wrapper">
    <div class="left"></div>
    <div class="center">
        <!-- 표시할 textarea 영역 --> 

        
     
      <label for="level-select">게시글 선택</label>
      <br>
      <form action="read.php" method="post">
    <select name="pets" id="pet-select">
        <option value="">----</option>
        <option value="news">IT뉴스</option>
        <option value="contest">대회소식</option>
        <option value="employment">수료자 취업소식</option>
    </select>
        <input type="text" width="40px" class="form-control" placeholder="제목을 입력해 주세요." name="title" ></input>
        <textarea name="content" id="ir1" rows="20" cols="100" ></textarea>       
        <!-- 페이지 로딩시 초기화 --> 
        <script type="text/javascript">
        var oEditors = [];
        nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "ir1",
        sSkinURI: "dist/SmartEditor2Skin.html",
        fCreator: "createSEditor2"
        });
        </script>
        <input style="margin-left:1000px" type="submit" class="btn btn-success" value="등록"></input>
        </form>

    
    </div>
    <div class="right"></div>
  </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
