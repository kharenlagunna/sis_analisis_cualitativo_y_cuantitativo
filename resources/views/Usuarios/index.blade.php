@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  
@stop

@section('content')
    <p>Control de usuarios.</p>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Email</th>
                <th scope="col">Creado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <form action=" {{route('Usuarios.destroy', $user->id)}}" method="POST">
                        <a href="/Usuarios/{{$user->id}}/edit" class="btn btn-info"><i class="fas fa-pen"></i></a>
                        <a href="/Usuarios/{{$user->id}}/edit" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        @csrf
                        @method('DELETE')                       
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            
            @endforeach            
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop