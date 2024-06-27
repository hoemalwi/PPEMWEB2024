<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
            max-width: 100%;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container form {
            display: grid;
            gap: 10px;
        }
        .form-container form label {
            font-weight: bold;
        }
        .form-container form input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: calc(100% - 16px);
        }
        .form-container form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container form button:hover {
            background-color: #0056b3;
        }
        .form-container form .error {
            color: #dc3545;
            font-size: 14px;
        }
        .form-container form .links {
            margin-top: 10px;
        }
        .form-container form .links a {
            color: #007bff;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login Form</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit">Login</button>
            </div>

            <div class="links">
                <a href="{{ route('register') }}">Don't have an account? Register here</a>
            </div>
        </form>
    </div>
</body>
</html>
