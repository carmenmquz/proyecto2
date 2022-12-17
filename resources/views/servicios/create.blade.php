@extends('layouts.master')
@section('content')

<div class="row" style="margin-top:40px">
    <br>
    <br>
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir servicio
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ url('/servicios/create') }}" method="POST">

	            @csrf

	            <div class="form-group">
	               <label for="id">ID</label>
	               <input type="text" name="id" id="id" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="dninie">DNI/NIE</label>
	               <input type="number" name="dninie" id="dninie">
	            </div>

	            <div class="form-group">
	            	<label for="especialidad">Especialidad</label>
	               <input type="text" name="especialidad" id="especialidad" class="form-control">
	            </div>
	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Añadir servicio
	               </button>
	            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@endsection
