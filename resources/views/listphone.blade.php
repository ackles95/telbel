<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<h1>Qua ci vanno i telefoni</h1>


@foreach($phones as $phone)

<h1>{{ $phone->Brand }}</h1>
<h1>{{ $phone->Model }}</h1>
<h1>{{ $phone->Storage }}</h1>
<h1>{{ $phone->Warranty }}</h1>
<h1>{{ $phone->Color }}</h1>
<h1>{{ $phone->Year }}</h1>
<h1>{{ $phone->Price }}</h1>


    @endforeach




</body>
</html>