@extends('layout')


@section('content')

    <h1 class="panel-3">Création d'un livre</h1>

    {!! Form::open(['url' => route('book.store')]) !!}

    @method('POST')
    @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            {!! Form::label('title','Titre') !!}
        {!! Form::text('title',null,['class' => 'form-control']) !!}
        {!! $errors->first('title', '<small class="help-block" style="color: red">:message</small>') !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('author','Auteur') !!}
        {!! Form::text('author',null,['class' => 'form-control']) !!}
        {!! $errors->first('author', '<small class="help-block" style="color: red">:message</small>') !!}
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::label('editor','Editeur') !!}
                {!! Form::text('editor',null,['class' => 'form-control']) !!}
                {!! $errors->first('editor', '<small class="help-block" style="color: red">:message</small>') !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('lang_book','Langue du livre') !!}
                {!! Form::text('lang_book',null,['class' => 'form-control']) !!}
                {!! $errors->first('lang_book', '<small class="help-block" style="color: red">:message</small>') !!}
            </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-8">
                {!! Form::label('description','Description') !!}
                {!! Form::textarea('description',null,['class' => 'form-control']) !!}
                {!! $errors->first('description', '<small class="help-block" style="color: red">:message</small>') !!}
              </div>
              <div class="form-group col-md-2">
                {!! Form::label('nbr_copy','Nombre d\'exemplaire') !!}
                {!! Form::number('nbr_copy',null,['class' => 'form-control']) !!}
                {!! $errors->first('nbr_copy', '<small class="help-block" style="color: red">:message</small>') !!}
              </div>
          </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>

    {!! Form::close() !!}
@endsection

