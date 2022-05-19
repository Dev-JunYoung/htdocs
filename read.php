

<?php
  $title = $_POST['title'];
  $ir1 = $_POST['ir1'];
  $kind = $_POST['kind'];
?>

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
.board{
  margin:50px;
}
.button{
  float: right;
}

</style>
<link rel="stylesheet" href="css/style.css">
    
    <!-- Custom styles for this template -->
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
            <a href="itnews.php" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              IT 뉴스
            </a>
          </li>
          <li>
            <a href="contest.php" class="nav-link text-white">
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
            <h1>read board</h1>      
            </div>  
      <div class="board">
      </div>
    
            <!---->
            <div class="button">
            <button type="button"  type="submit"  class="btn btn-secondary">이전글</button>
            <button type="button" type="submit"  class="btn btn-secondary">다음글</button> 
            <input  type="submit"  value="목록"  class="btn btn-success"/>
            </div>
            
            <div class="table_wrapper">            
                <table class="table" width="" height=""><?php echo $kind?>
                        <td style="font-size : 2em;   font-weight: bold ;"><?php echo $title ?></td>   
                        
                        <td width="200"></td>
                    </tr>
                    <tr>
                        <td >작성자 : 실리콘밸리/김성민 특파원</td>
                        <td width="250px">
                          <script>
                            let today = new Date();   
                            document.write(today.toLocaleString() );
                        </script></td>
                    </tr>
                    <tr>
                    <td style="letter-spacing:1px;line-height:200%"><?php echo $ir1 ?></td>
                    </tr>
                </table>
                
  <form method="post">
  
  </form>

          <div>
            댓글            
          </div>
          <textarea>              
            </textarea>
            <input  type="submit"  value="등록"  class="btn btn-light"/>
            </div>


  
    </div>
    <div class="right"></div>
  </div>
  <footer>

  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></scrip>

      
  </body>
</html>
