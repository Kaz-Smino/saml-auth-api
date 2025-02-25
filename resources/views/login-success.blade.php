<!-- resources/views/login-success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full text-center">
        <h1 class="text-4xl font-bold text-green-500 mb-4">Welcome Back!</h1>
        <p class="text-gray-700 mb-6">
            Successfully logged in using 
            <span class="font-semibold text-green-500">SAML Single Sign-On</span>.
            <br>
            Enjoy your stay!
        </p>
    </div>
</body>
</html>