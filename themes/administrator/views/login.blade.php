<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap">
    <link rel="shortcut icon" sizes="196x196" href="assets//images/logo.png">
    <link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
<div id="back-to-home">
    <a href="index.html" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>
<div class="simple-page-wrap">
	@yield('content')
    <div class="simple-page-logo animated swing">
		<a href="index.html"><span><i class="fa fa-gg"></i></span> <span>Control Panel</span></a>
    </div>
	
    <div class="simple-page-form animated flipInY" id="login-form"><h4 class="form-title m-b-xl text-center">Sign In With Your Infinity Account</h4>
        <form action="#">
            <div class="form-group"><input id="sign-in-email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group"><input id="sign-in-password" type="password" class="form-control"
                                           placeholder="Password"></div>
            <div class="form-group m-b-xl">
                <div class="checkbox checkbox-primary"><input type="checkbox" id="keep_me_logged_in"><label
                        for="keep_me_logged_in">Keep me signed in</label></div>
            </div>
            <input type="submit" class="btn btn-primary" value="SING IN">
        </form>
    </div>
    
	<div class="simple-page-footer"><p><a href="password-forget.html">FORGOT YOUR PASSWORD ?</a></p>
        <p><small>Don't have an account ?</small><a href="signup.html">CREATE AN ACCOUNT</a></p>
    </div>
</div>
</body>
</html>