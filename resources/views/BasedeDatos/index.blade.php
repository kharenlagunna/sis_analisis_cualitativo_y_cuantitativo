@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Base de Datos</h1>
@stop

@section('content')
    <p>Aquí va la base de datos.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop