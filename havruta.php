
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>자유게시판</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
<style>
</style>

    
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
      <span class="fs-4">질문하기 전에</span>
    </a>
    <hr>
 
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link text-white" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              <p>1. 문제가 무엇인지 명확하게 정의 내리고, 생각 해보기</p>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              <p>2. Document, 검색을 통해 부족한 부분 공부해보기</p>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              <p>3. (1).(2) 과정 후에도 방향성,접근성을 모르겠다.</p>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              <p>4. 본인이 충분한 여유를 갖고 다시 생각할 수 있는지 객관적으로 판단.</p>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              <p>5. 문제가 무엇이고, 어떤 방법으로 해결을 위한 시도했는지, 구체적으로 질문하기.</p>
            </a>
          </li>
        </ul>
        <hr>
  
    </div>
    </div>
    <div class="center">
    <div id="title">  
            <h1>질문/하브루타</h1>          
  </div>  
    <div class="custom_table">
                <table class="table table-hover" >
                  <thead>
                    <th width="50px">번호</th>    <th width="600px">제목</th>    <th width="150px">작성자</th> <th width="100px">작성일</th><th width="70px">조회수</th>   <!--<th>작성자</th>-->
                  </thead>
                  <tbody>
                    <tr><!-- 첫번째 줄 시작 -->
                        <td onclick="location.href='index.html'">0</td>
                        <td>안드로이드 - 리사이클러뷰 관련 하브루타</td>
                        <td>8기 가나다</td>
                        <td>작성일 칸</td>
                        <td>11</td>
                    </tr><!-- 첫번째 줄 끝 -->
                    <tr><!-- 두번째 줄 시작 -->
                        <td>1</td>
                        <td>java 쓰레드 질문 있습니다.</td>
                        <td>8기 라마바</td>
                        <td>2022.05.15</td>
                        <td>12</td>
                    </tr><!-- 두번째 줄 끝 -->
                    <tr><!-- 두번째 줄 시작 -->
                        <td>2</td>
                        <td>제목 칸</td>
                        <td>작성자 칸</td>
                        <td>18:43</td>
                        <td>50</td>
                    </tr><!-- 두번째 줄 끝 -->
                  </tbody>                
                  </table>          
    </div>
    <button style="margin-left:1230px" type="button" class="btn btn-success" onclick="location.href='register_havruta.php'" >글쓰기</button>
    </div>    
    <div class="right"></div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>      
  </body>
</html>
