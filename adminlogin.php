<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Login Page - Help J'pura Flames</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
       
body {
  background-color: #465568;
  padding: 0;
  margin: 0;
}

.page-lock {
  margin: 90px auto 30px auto;
  width: 450px;
}

.page-lock .page-logo {
  text-align: center;
  margin-bottom: 15px;
}

.page-lock .page-body {
  width: 100%;
  margin-top: 50px;
  background-color: #3a4554;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  -ms-border-radius: 7px;
  -o-border-radius: 7px;
  border-radius: 7px;
}

.lock-head {
  display: block;
  background-color: #323d4b;
  text-align: center;
  padding-top: 15px;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: 400;
  color: #4db3a5;
}

.lock-body {
  display: block;
  margin: 35px;
  overflow: hidden;
}

.lock-avatar {
  margin-top: 15px;
  height: 110px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
}

.lock-avatar-square {
  height: 140px;

}

.lock-form {
  padding-left: 40px;
}

.lock-form h4 {
  margin-top: 0px;
  color: #dbe2ea;
  font-size: 18px;
  font-weight: 400;
}

.lock-form .form-group {
  margin-top: 20px;
}

.lock-form .form-group .form-control {
  background-color: #303a48;
  border: none;
  width: 220px;
  height: 40px;
  color: #697687;
  border-radius: 0;
}

.lock-form .form-group .form-control::-moz-placeholder {
  color: #556376;
  opacity: 1;
}

.lock-form .form-group .form-control:-ms-input-placeholder {
  color: #556376;
}

.lock-form .form-group .form-control::-webkit-input-placeholder {
  color: #556376;
}

.lock-form .form-group .form-control:focus {
  background-color: #2b3542;
}

.lock-form .form-actions {
  margin-top: 20px;
}

.lock-form .form-actions .btn-success {
  background-color: #e76070 !important;
  width: 220px;
  font-weight: 600;
  padding: 10px;
  border: none;
  border-radius: 0;
}

.lock-form .form-actions .btn-success:hover {
  background-color: #d75464 !important;
}

.lock-bottom {
  display: block;
  background-color: #323d4b;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px;
}

.lock-bottom a {
  font-size: 14px;
  font-weight: 400;
  color: #638cac;
}

.lock-bottom a:hover {
  color: #7ba2c0;
}

@media (max-width: 768px) {
  .page-lock {
    margin: 100px auto;
  }
}
@media (max-width: 560px) {
  .page-lock {
    margin: 50px auto;
    width: 400px;
  }

  .lock-body {
    margin: 30px;
  }

  .lock-avatar {
    width: 120px;
    height: 120px;
    margin-top: 20px;
  }

  .lock-avatar-square{
      width: 120px;
    height: 120px;
  }
  
  .lock-form h4 {
    font-size: 16px;
  }

  .lock-form .form-group .form-control {
    padding: 20px 20px;
    width: 170px;
  }

  .lock-form .form-actions .btn-success {
    width: 170px;
    margin-bottom: 10px;
  }
}
@media (max-width: 420px) {
  .page-lock {
    margin: 30px auto;
    width: 280px;
  }

  .lock-body {
    margin: 0px;
  }

  .page-lock .page-body {
    margin-top: 30px;
  }

  .lock-avatar {
    margin-top: 20px;
  }

  .lock-avatar-block {
    display: block;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
  }

  .lock-form {
    padding-left: 20px;
  }

  .lock-form h4 {
    font-size: 16px;
    text-align: center;
  }

  .lock-form .form-group .form-control {
    padding: 20px 20px;
    width: 240px;
  }

  .lock-form .form-actions .btn-success {
    width: 240px;
    margin-bottom: 20px;
  }
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="page-lock">
        <div class="page-logo">
    		<a class="brand" href="index.html">
    		<img src="https://goo.gl/BRKe41" alt="logo" class="lock-avatar-square"/>
    		</a>
    	</div>
    	<div class="page-body">
    		<div class="lock-head">
    			 Help Center Admin Access 
    		</div>
    		<div class="lock-body">
    			<div class="pull-left lock-avatar-block">
    				<img src="https://goo.gl/OZ5UJE" class="lock-avatar">
    			</div>
    			<form class="lock-form pull-left" action="" method="post">
    				<div class="form-group">
                                    <input id="name" name="username" class="form-control placeholder-no-fix" autocomplete="off" placeholder="user Name" />
                                </div>
                                 <div class="form-group">
                                    <input id="password" name="password" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" />
    				</div>
    				<div class="form-actions">
    					<button name="submit" type="submit" class="btn btn-success uppercase">Login</button>
    				</div>
                            <span><?php echo $error; ?></span>
    			</form>
    		</div>
    		<div class="lock-bottom">
    			<a href="https://goo.gl/S4AF0N" target='_blank'>Do not have access?</a>
    		</div>
    	</div>
    </div>
</div>

<br>
<br>
<center>
<strong>Powered by <a href="http://www.jpuraflames.com" target="_blank">J'pura flames</a></strong>
</center>
<br>
<br>
<script type="text/javascript">

</script>
</body>
</html>
