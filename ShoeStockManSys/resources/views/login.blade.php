<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <style>

        header {
            background-color: #ffffff;
            color: #000000;
            border-style:solid;
            margin-top:5px;
            margin-left:5px;
            margin-right:5px;
            text-align: center;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: -10px;
        }
        input[type="text"], input[type="password"] {
            display:block
        }

        form div{
            margin:20px
        }

        form {
            border-style:solid;
            margin-top:100px;
            margin-left:500px;
            margin-right:500px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body>
    <header>
		<div class="logo">
            <h1>Shoe Stock Management System</h1>
        </div>
	</header>
    
    <div class="loginForm">
		<form action="loginUser" method="post">
			<div>
				<h1>Login Your Account</h1>
			</div>
		
			<div>
				<label>Email:</label>
				<input type="text" name="userEmailLogB" id="userEmailLogF">
			</div>
		
			<div>
				<label>Password:</label>
				<input type="password" name="userPassLogB" id="userPassLogF">
			</div>

            <div>
                <a href="{{url('/home')}}">
                    <button type="button" class="btn btn-outline-primary float-right">Login</button>
                </a>
            </div>
            
		
			<div>
				Don't have an Account?
				<input type="button" value="Register">
			</div>
		</form>
	</div>
</body>
</html>