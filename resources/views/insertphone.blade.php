<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{ route('phone.store') }}">

    {{ csrf_field() }}

    <input type="text" class="" name="Brand">
    <input type="text" class="" name="Model">
    <input type="text" class="" name="Storage">
    <input type="text" class="" name="Warranty">
    <input type="text" class="" name="Color">
    <input type="text" class="" name="Year">
    <input type="text" class="" name="Price">
    <button type="submit">SALVATORE</button>


</form>


<a href="/login/facebook">Fb</a>
<a href="/login/google">Google</a>
<a href="/login/twitter">Twitter</a>


</body>
</html>




