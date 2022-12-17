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
        ID: {{$cuidador->id}}
        <br>
        DNI/NIE: {{$cuidador->dninie}}
        <br>
        Especialidad: {{$cuidador->especialidad}}
        <br>
        <br>
    </div>
</div>

@endsection
