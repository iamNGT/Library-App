@extends('layout')



@section('content')
    <h1>User</h1>

    <div class="row">
        <a href="{!! route('user.create') !!}" class="btn btn-primary">Créer un nouveaau utilisateur</a>
    </div>


    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td># {!! $user->id !!}</td>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->admin !!}</td>
                    <td>
                        <a href="{!! route('user.destroy',$user) !!}" class="btn btn-danger">Supprimer</a>
                        <a href="{!! route('user.edit',$user) !!}" class="btn btn-primary">Editer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
