@extends('layout')


@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-3">Listes des Livres</h1>
        <a href="{{ route('book.create') }}" class="btn btn-primary" >Ajouter un livre</a>
    </div>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse table-primary">
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Editeur</th>
                <th>Langue</th>
                <th>Nombre exemplaire</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td scope="row">{!! $book->title !!}</td>
                    <td>{!! $book->author !!}</td>
                    <td>{!! $book->editor !!}</td>
                    <td>{!! $book->lang_book !!}</td>
                    <td>{!! $book->nbr_copy !!}</td>
                    <td>{!! substr($book->description,0,50).'...' !!}</td>
                    <td>
                        <a href="{!! route('book.destroy',$book->id) !!}" class="btn btn-danger">Supprimer</a>
                        <a href="{!! route('book.edit',$book) !!}" class="btn btn-primary">Editer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

    <div class="col-md-12 justify-content-between" style="height: 20px; overflow: hidden;">
        {{ $books->links() }}
    </div>

@endsection
