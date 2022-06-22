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
                <li><a href="#">{{ $item }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>Home</h1>
    <h2>{{$user}} dice:</h2>
    <p>{{ $message }}</p>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi qui et quod itaque ratione libero, neque praesentium sint expedita sit rem id quis dolores aliquam sapiente recusandae. Nemo, veritatis eum dolor fuga ut labore ipsa, facilis perspiciatis quaerat soluta ipsum praesentium esse repellendus pariatur modi iusto officia, minima dolore voluptatibus obcaecati cum nam? Similique ratione nulla molestias. Fugiat ab velit nesciunt ipsum molestias sint beatae repudiandae quasi, maiores autem delectus temporibus quod consectetur saepe omnis mollitia! Unde quis quisquam voluptatum consequuntur iusto suscipit ea praesentium. Voluptatibus, reiciendis provident libero pariatur quam unde nihil, dicta aliquam rem similique, nesciunt deleniti obcaecati.</p>
</body>
</html>
