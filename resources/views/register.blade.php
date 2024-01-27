<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="asset/css/login.css">
    <!-- js link -->
    <link rel="stylesheet" href="{{ asset('asset/style.js') }}">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div>
                <a href="index.php">
                    <img src="{{ asset('asset/img/logo.JPG') }}" alt="logo">
                </a>
            </div>
            <div>
                <p>Having trouble? <span> Contact us</span></p>
            </div>
        </div>

        <h4>Register</h4>
        
        <form action="{{ route('register') }}" method="post">
            @csrf
            <label for="name">Name <span>*</span></label>
            <div>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </div>
            <label for="username ">Username  <span>*</span></label>
            <div>
                <input type="text" name="username" id="username" value="{{ old('username') }}">
            </div>
            <label for="username ">Email  <span>*</span></label>
            <div>
                <input type="text" name="email" id="username" value="{{ old('email') }}">
            </div>
            <label for="Password ">Password  <span>*</span></label>
            <div>
                <input type="password" name="password" id="Password ">
            </div>
           <div> <button type="submit">Register</button></div>
           <div class="form-footer">
            <p>Having trouble signing in?</p>
            <p><span><a href="{{ route('login') }}">login</a></span> | <span>Forgotten Password</span></p>
           </div>
        </form>
    </div>
    <footer><p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full details can be viewed <a href="#">here</a>.</p></footer>
</body>
</html>