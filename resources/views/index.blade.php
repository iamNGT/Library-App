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
    {!! Form::open(['url' => route('register'),'class' => 'box']) !!}
        @method('POST')
        @csrf
        <h1>Login</h1>
        {!! Form::text('name', null, ['placeholder' => 'username']) !!}
        {!! Form::password('password', ['placeholder' => 'password']) !!}
        {!! Form::submit('sign-in') !!}
            @if(count($errors) > 0)
            <div class="info-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        {!! Form::close() !!}
</body>
</html>
