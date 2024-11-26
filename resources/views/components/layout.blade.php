{{-- basically all the head tag or even navbar etc are all the same, why not we just 
apply the layout and slot to wrap all the other pages ~ reduce duplication --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Networks</title>
</head>
<body>
    
    {{-- we apply nav --}}
    <header>
        <nav>
            <h1>Ninja Networks</h1>
            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create New Ninjas</a>
        </nav>
    </header>

    {{-- apply main tag --}}
    <main class="container">
        {{-- special variable to be wrapped --}}
        {{ $slot }}
    </main>
</body>
</html>