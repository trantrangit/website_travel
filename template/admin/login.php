<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Đăng nhập</title>
<link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css" />
<style>
    #footer{
        background:#F1F1F1;
        padding-top:15px;
    }
    #body{
        
        padding-top:100px;
    }
</style>
</head>

<body>
<script type="text/javascript" src="components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="components/bootstrap/dist/js/bootstrap.min.js"></script>

 <div class="container">
        <div class="panel-body">
        <div class="row" id="body">
        <div class="col-md-4"></div>
  <div class="col-md-4">
  <form class="form-signin" role="form" method="post" action="login">
                                                   <h2 class="form-signin-heading">Đăng Nhập</h2>
                <input type="text" class="form-control" name="id" placeholder="Email của bạn" required autofocus>
                <br>
                <input type="password" class="form-control" name="pass" placeholder="Mật khẩu" required>
                <br>
                </label>
                
                <a class="btn btn-lg btn-primary btn-block" name="btnlg" href="?action=TKTours">Đăng nhập</a>
                <button class="btn btn-lg btn-success btn-block" name="btnlg" onclick='location.href="register";'>Đăng ký tài khoản</button>

            
      </form>
  </div>
  <div class="col-md-4"></div>

    </div>
    </div>
</div> <!-- /container -->

</body>
</html>
