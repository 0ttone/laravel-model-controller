<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

      <h1>pagina generata da Controller </h1>
      <pre>test foreach</pre>   

      @foreach($allMovies as $movie)
            {{$movie->title}}<br>

      @endforeach  

      
</body>
</html>