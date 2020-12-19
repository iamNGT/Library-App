@extends('layout')


@section('content')


    <h1>Ajouter un utilisateur</h1>


    {{ Form::open(['url' => route('user.store')]) }}
        @method('POST')
        @csrf


        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::label('name','Nom') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
        {!! $errors->first('name', '<small class="help-block" style="color: red">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
            {!! Form::label('email','Email') !!}
        {!! Form::input('email','email',null,['class' => 'form-control']) !!}
        {!! $errors->first('email', '<small class="help-block" style="color: red">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
            {!! Form::label('password','Password') !!}
        {!! Form::input('password','password',null,['class' => 'form-control']) !!}
        {!! $errors->first('password', '<small class="help-block" style="color: red">:message</small>') !!}
        </div>

        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
            {!! Form::label('password_confirmation','Confirm Password') !!}
        {!! Form::input('password','password_confirmation',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('admin', 1, null) !!} Administrateur
                </label>
            </div>
        </div>

        <button class="btn btn-primary">Valider</button>

    {{ Form::close() }}

        <a href="" style="color: red"></a>
@stop


