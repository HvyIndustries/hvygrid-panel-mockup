<!DOCTYPE html>
<html>
<head>
    <title>Sign In | HvyGrid</title>
    <link rel="stylesheet" type="text/css" href="/styles/core.css" />
</head>
<body class="login">

    <div class="loginbox">
        <div class="loginbox-inner">
            <h1>HvyGrid</h1>
            <form action="/websites" method="POST">
                <input type="text" class="form-control" name="email" placeholder="Email Address" />
                <input type="password" class="form-control" name="password" placeholder="Password" />
                <button class="btn">Log In</button>
            </form>
            <p><a href="/forgot">Forgot Password</a></p>
        </div>
    </div>

</body>
</html>