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
                <li><a href="">{{ $item }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>I nostri contatti</h1>

    <ul>
        @foreach($contatti as $contatto)
        <li>{{ $contatto }}</li>
        @endforeach
    </ul>
</body>
</html>
