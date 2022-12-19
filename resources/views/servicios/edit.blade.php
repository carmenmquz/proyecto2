@extends('layouts.master')
@section('content')

<div class="row" style="margin-top:40px">
    <br>
    <br>
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar servicio
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ url('/servicios/edit/' . $id) }}" method="POST">
                {{method_field('PUT')}}
	            @csrf

	            <div class="form-group">
	            	<label for="dninie">DNI/NIE</label>
	               <input type="text" name="dninie" id="dninie" value="{{$cuidador->dninie}}">
	            </div>

	            <div class="form-group">
	            	<label for="especialidad">Especialidad</label>
	               <input type="text" name="especialidad" id="especialidad" class="form-control" value="{{$cuidador->especialidad}}">
	            </div>
	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Modificar servicio
	               </button>
	            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@endsection
