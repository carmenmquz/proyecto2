@extends('layouts.master')
@section('content')

<div class="row">
    @php
    $id = 0;
    @endphp
       @foreach( $arrayServicios as $servicio )
           @php
               $id++;
           @endphp
       <div class="col-xs-6 col-sm-4 col-md-3 text-center">

           <a href="{{ url('/servicios/show/' . ($id - 1)) }}">
            <br>
            <br>
            <br>
               <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
               <h4 style="min-height:45px;margin:5px 0 10px 0">
                   Nombre: {{$servicio['nombre']}}
                   <br>
                   Precio: {{$servicio['precio']}}
                   <br>
                   Categoría: {{$servicio['categoria']}}
                   <br>
                   Imagen: {{$servicio['imagen']}}
                   <br>
                   Descripción: {{$servicio['descripcion']}}
               </h4>
           </a>

       </div>
       @endforeach

   </div>

@stop
