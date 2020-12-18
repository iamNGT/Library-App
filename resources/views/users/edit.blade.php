@extends('layout')


@section('content')


    <h1>Page d'edition</h1>


    @if (isset($ok)))
    <div class="bg bg-success">
        @foreach ($ok as $msg)
            <span>{{ $msg }}</span>
        @endforeach
    </div>
    @endif

    {{ Form::open(['url' => route('user.update',$user)]) }}
        @method('PUT')
        @csrf


        <div class="form-group">
            {!! Form::label('name','Nom') !!}
        {!! Form::text('name',$user->name,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email') !!}
        {!! Form::input('email','email',$user->email,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password') !!}
        {!! Form::input('password','password',$user->password,['class' => 'form-control']) !!}
        </div>

        <button class="btn btn-primary">Valider</button>

    {{ Form::close() }}

@stop


