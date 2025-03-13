<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            background-image: url('/uploads/bgimg.jpg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            margin-left: 1;
            margin-right: 1;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 275px;
            opacity: .8;
        }

        h2 {
            font-family:cursive; 
            text-align: center;
            margin-bottom: 20px;
            color:#ea8584;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 93%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #ffb3b3;
            color: black;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .register-link {
            margin-top: 15px;
            font-size: 14px;
            margin-left: 55px;
        }
        .register-link a {
            color: #ffb3b3;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: none; /* Prevents underline on hover */
            color: #ea8584; /* Optional: Slightly darkens the color on hover */
        }
        .error-message {
            height: 20px;
            text-align: center;
            position: absolute;
            color: red;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>

    @if(session('error'))
            <p class="error-message">{{ session('error') }}</p>
     @endif

    <form action="/validate" method="POST">
        @csrf
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

    <p class="register-link">No account? <a href="/register">Register Now!</a></p>
</div>

</body>
</html>
