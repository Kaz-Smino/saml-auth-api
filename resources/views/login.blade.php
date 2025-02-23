<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="login-container">
        <h1>Login with Keycloak</h1>
        <a href="" class="btn">Login with SAML</a>
        {{-- <a href="{{ route('saml.login') }}" class="btn">Login with SAML</a> --}}
    </div>
</body>
</html>