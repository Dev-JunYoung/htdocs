<?php
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$date=$_POST['date'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>mypage</title>

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

.mb-1 row{
  align-content: center;
}

/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');
/*
html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
*/
.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;

}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      #mypage{
        text-align: center;
        align-content: center;
      }

      .mb-3{
          width:250px;
          margin:auto;
      }
    
    </style>
    
    <!-- Custom styles for this template -->
  </head>
  <body>  
  <?php include("header.php"); ?>
<main>  
    <h1 id="title">
      정보 수정
    </h1>
<form>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <!-- 비활성화 // 바뀌면 안되는 값 사용자 이메일 -->
  <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" value="<?php echo $email ?>" disabled>
</div>
<div class="mb-3">
  <!---->
  <label for="exampleFormControlTextarea1" class="form-label">비밀번호</label>  
  <br>
  <button type="button" class="btn btn-secondary" onclick="updatePassword();">비밀번호변경</button>
</div>
<div class="mb-3">
  <!--이름-->
  <label for="exampleFormControlTextarea1" class="form-label">이름</label>
  <input class="form-control" type="text" placeholder="<?php echo $name ?>" aria-label="Disabled input example" >
</div>
<div class="mb-3">
  <!--닉네임은 자동설정 비활성화로 해도 될듯 일단 대기-->
  <label for="exampleFormControlTextarea1" class="form-label">닉네임</label>  
  <input class="form-control" type="text" placeholder="닉네임" aria-label="Disabled input example" >
</div>
<div class="mb-3">
  <!---->
  <label for="exampleFormControlTextarea1" class="form-label">핸드폰 번호</label>
  <input class="form-control" type="tel" placeholder="핸드폰 번호" aria-label="Disabled input example" >
</div>
<div class="mb-3">
            <!--캘린더-->
            <div id="datetext">팀노바 시작일</div>
						<input type="text" class="form-control" placeholder="<?php echo $date ?>" name="date" disabled>                
					</div> 
<div class="mb-3">
  <!---->
  <label for="level-select">단계 선택</label>
      <br>
<select name="pets" id="pet-select">
    <option value="">--단계--</option>
    <option value="java">기초 JAVA</option>
    <option value="android">기초 Android</option>
    <option value="php">기초 PHP</option>
    <option value="first">응용 1단계</option>
    <option value="second">응용 2단계</option>
    <option value="completed">수료자</option>
</select>
</div>
<div class="mb-3">
<hr>
<input type="submit" class="btn btn-success" style="margin-left:70%" value="저장"></input>
</div>
</div>
</form>
</main>

<script>
           function updatePassword(){
             window.alert("비밀번호 변경입니다.. ");
           }

          </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>
