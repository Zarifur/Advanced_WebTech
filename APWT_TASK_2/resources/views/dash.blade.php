<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documt</title>
</head>
<body>
    <h1>Wellcome to dashbord</h1>
@if(Session::get('user')) {{Session::get('user')}} 
<a class="btn btn-danger" href="/Log_In">Log out </a>
@endif
</body>
</html>