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
                <li><a href="http://127.0.0.1:8000/{{$item}}">{{ $item }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>About our company</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facilis suscipit quisquam minus debitis sed, consequuntur eligendi! Laudantium numquam exercitationem eos. Voluptas dolorem eligendi facere, vel obcaecati quis magnam modi ratione necessitatibus temporibus molestias ea est quae adipisci nemo soluta eveniet. Voluptas, sed! Totam reiciendis mollitia corporis nobis, maiores ipsam quisquam non, quod dolorum velit vitae molestias eos alias, quia blanditiis provident! Nesciunt error repellat sapiente quas aspernatur? Id, excepturi sequi quaerat doloribus voluptatum, quos voluptatem a temporibus velit cumque mollitia nihil nam ducimus harum, aliquam porro illum? Ea, accusantium nam. Accusamus adipisci delectus voluptas cumque nihil laudantium eligendi voluptatem perferendis ex vero neque debitis, praesentium atque culpa asperiores dolor optio dolore animi repudiandae ea a eveniet! Eius ipsum deleniti possimus hic saepe nostrum consequuntur pariatur provident sit. Sint dolores in obcaecati? Saepe illum labore, impedit ea provident aspernatur dolor, minima soluta quaerat adipisci dolores, amet facilis quisquam tempora. Qui rem beatae architecto fugiat nam odit provident perspiciatis dolorem, molestias amet optio magnam eaque doloribus nesciunt atque facilis ullam fugit aperiam nostrum modi ad quaerat! Possimus sapiente earum officia magnam sequi facilis cum corporis tempore ipsam! Sapiente, nemo qui. Voluptatibus dignissimos molestiae sit quo, magnam sed fuga. Expedita, dolore optio.</p>
</body>
</html>
