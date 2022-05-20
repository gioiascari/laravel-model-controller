{{-- @dump($movie) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Model Controller</title>
</head>
<body>





    <div class="container">
                <div class="title">
                    <h1>Laravel Model Controller</h1>
                </div>
                <div class="card-container">
                    @foreach ( $movie as $data )
                    <div class="card">
                        <div class="card-title">
                            <h3>{{$data['title']}}</h3>
                            <h1>{{$data['original_title']}}</h1>

                        </div>
                        <div class="card-detail">
                            <p>{{$data['nationality']}}</p>
                            <p>{{$data['date']}}</p>
                            <p>{{$data['vote']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>



    </div>
</body>
</html>
