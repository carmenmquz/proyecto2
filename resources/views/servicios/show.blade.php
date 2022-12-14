@extends('layouts.master')
@section('content')

<div class="row">

    <div class="col-sm-4">
        <br>
        <br>
        <br>
        <br>
        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
    </div>
    <div class="col-sm-8">

        Nombre: {{$servicio['nombre']}}
        <br>
        Precio: {{$servicio['precio']}}
        <br>
        Categoría: {{$servicio['categoria']}}
        <br>
        Imagen: {{$servicio['imagen']}}
        <br>
        Descripción: {{$servicio['descripcion']}}
        <br>
        <br>
    </div>
</div>

@endsection
