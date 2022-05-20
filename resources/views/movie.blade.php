{{-- @dump($movie) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Controller</title>
</head>
<body>

    <div class="container">
        <div class="card">
            @foreach ( $movie as $data )
                <h3>{{$data['title']}}</h3>
                <h1>{{$data['original_title']}}</h1>
                <p>{{$data['nationality']}}</p>
                <p>{{$data['date']}}</p>
                <p>{{$data['vote']}}</p>




            @endforeach
        </div>
    </div>
</body>
</html>
