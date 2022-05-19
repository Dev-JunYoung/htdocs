
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>회원가입</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles
	-->

  <link rel="stylesheet" type="text/css" href="css/style.css">
    <!------ Include the above in your HEAD tag ---------->


    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<meta name="theme-color" content="#712cf9">


    <style>


/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
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


   

      #datetext{
        color: aliceblue;
        text-align: center;
        
      }
      
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
    

<main>
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
          <button type="button" onclick="location.href='login.php'" class="btn btn-outline-light me-2">Login</button>
          <button type="button" onclick="location.href='signup.php'" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
  <div class="b-example-divider"></div>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
		
			</div>
			<div class="card-body">
				<form method="post" action="mypage.php" onsubmit="return check()">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <!--이메일-->
						<input type="email" class="form-control" placeholder="email" name="email" required>
            <!-- 중복 확인 코드-->
            <button type="button" class="btn btn-secondary" onclick="emailcheck();">중복확인</button>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <!--비밀번호-->
						<input type="password" class="form-control" placeholder="password" name="password" id="password" required>
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <!--비밀번호 확인-->
						<input type="password" class="form-control" placeholder="password-checked" id="passwordchecked" required>
            
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <!--이름-->
						<input type="text" class="form-control" placeholder="이름" name="name"  required>            
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <!--캘린더-->
						<input type="date" class="form-control" placeholder="" name="date" required>            
            <div id="datetext">팀노바 시작일</div>
					</div>      
					<div class="form-group">
          <script>
           function emailcheck(){
             window.alert("중복확인입니다. ");
           }
           function check(){
            var password=document.getElementById('password').value;
            var passwordchecked=document.getElementById('passwordchecked').value;
            if(password==passwordchecked){
              return true;
            }else{
              window.alert("패스워드가 일치하지 않습니다. ");
              return false;
            }
          

              
           }
           
          </script>


            <!-- 제출 -->
						<input type="submit" value="sign-up" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>      


  </body>
</html>
