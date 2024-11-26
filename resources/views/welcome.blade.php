<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- this is called dynamic value inside lang (blade), if you remove the blade name in the file, this will return a string only (cant be used)--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Networks</title>

    @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to the Ninja Networks Tutorial</h1>
    <p>Click the button below to view the list of ninjas.</p>

    <a href="/ninjas" class="btn mt-4 inline-block">
        Find Ninjas!
    </a>
</body>
</html>