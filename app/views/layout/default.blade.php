<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THE RED BOOK</title>
	<style>
	  body {
            background: #fa503a;
            font-family: Arial;
            font-size: 14px;
            color: #fff;
        }
        .container {
            width: 960px;
            margin: 0 auto;
        }
        .form-box {
            width: 100%;
            margin:500px;
            margin-top: 300px;
        }
        select{
        	  border: none;
            border-radius: 3px;
            padding: 10px;
            margin: 8px 10px;
            width: 300px;         
        }
        input {
            border: none;
            border-radius: 3px;
            padding: 10px;
            margin: 10px 0;
            width: 300px;
        }
        a {
            color: #fff;
            text-decoration: underline;
        }
        .btn {
            background: #3F3F3F;
            color: #fff;
            width: 100px;
        }
        .forgot-password {
            display: inline-block;
            margin-top: 10px;
        }
        .error, .success {
            background: #B61818;
            padding: 5px;
            display: block;
            margin-top: -2px;
            border-radius: 5px;
        }
        form .error {
            border-radius: 0 0 5px 5px;
        }
        .success {
            background: #DDDD5E;
        }
     
	</style>
</head>
<body>
<div id="navigation">
	@yield('navigation')
	
</div>

<div id="container">
	@yield('content')
</div>

<div id="footer">
	@yield('footer')
</div>
	
</body>
</html>