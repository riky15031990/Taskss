@extends('app')
@section('content')

<div class="container w-25 border p-4 m t-4">
    <form>
  <div class="mb-3">
    <label for="titulo" class="form-label">Ingrese Titulo de la tarea</label>
    <input type="text" name="text" class="form-control">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Crear tarea</button>
</form>
</div>
@endsection