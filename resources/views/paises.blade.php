<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>Lista de paises <h1>

        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Capital</th>
                        <th>Moneda</th>
                        <th>Poblacion</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ( $naciones as $nombre =>$nacion)
                        <tr>
                            <th class="table-info">{{$nombre}}</th>
                            <th>{{$nacion["capital"]}}</th>
                            <th>{{$nacion["moneda"]}}</th>
                            <th>{{$nacion["poblacion"]}}</th>
                        </tr>


                        @endforeach
                </tbody>
        </table>

</body>
</html>
