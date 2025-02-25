<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Keycloak</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-sm w-full">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Welcome</h1>
        <p class="text-center text-gray-600 mb-8">Login with your Keycloak account</p>
        {{-- <a href="{{ route('saml.login') }}" class="block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded text-center"> --}}
        <a href="" class="block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded text-center">
            Login with Keycloak
        </a>
    </div>
</body>
</html>