<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>First Laravel</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach($menu as $item)
                <li>
                    <a href="{{ route($item) }}">{{ $item }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>Home</h1>
    <h2>{{$user}} dice:</h2>
    <p>{{ $message }}</p>
    <p>{{ $lorem }}</p>
</body>
</html>
