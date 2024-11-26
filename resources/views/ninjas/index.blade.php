<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Networks | Home</title>
</head>
<body>
    <h2>Currently Available Ninjas</h2>

    {{-- we want to pass dynamic value $ which will return a string hello --}}
    <p>{{ $greeting }}</p> 

    {{-- why not we put the array items inside the index page --}}
    <ul>
        <li>
            {{-- remember to always use dynamic value even in path --}}
            <a href="/ninjas/{{$ninjas[0]["id"]}}">
                {{ $ninjas[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{$ninjas[1]["id"]}}">
                {{ $ninjas[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>