<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Articoli</h1>
    {{$titolo ?? 'Titolo placeholder'}}
    
    <ul>
    <li><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('articoli')}}">Articoli</a></li>
    <li><a href="{{route('contatti')}}">Chi sono</a></li>
    {{-- <li><a href="{{route('articolo')}}">Articolo</a></li> --}}

        @foreach ($articoli as $chiave => $articolo)

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$articolo['title']}}</h5>
                  <p class="card-text">{{$articolo['category']}}</p>
                  <h6 class="card-description">{{$articolo['description']}}</h6>
                  <a href="{{route('articolo',['id'=>$chiave])}}" class="btn btn-primary">Articolo</a>
                </div>
              </div>
            </div>
          </div>
            
        @endforeach

    </ul>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>