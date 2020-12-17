<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Library App</title>
</head>
<body>
    {{-- <form action="" class="box" method="POST">
        <h1>Login</h1>
        <input type="text" name="" placeholder="Username">
        <input type="password" name="" placeholder="Password">
        <input type="submit" value="Sign-in">
    </form> --}}
    {!! Form::open(['url' => route('register'),'class' => 'box']) !!}
        @method('POST')
        @csrf
        <h1>Login</h1>
        {!! Form::text('name', null, ['placeholder' => 'username']) !!}
        {!! Form::password('password', ['placeholder' => 'password']) !!}
        {!! Form::submit('sign-in') !!}
    {!! Form::close() !!}

<p style="color: white">{!!  $errors !!}</p>
</body>
</html>
