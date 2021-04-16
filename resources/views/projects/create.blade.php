
@extends('layout')

@section('title')
Registrar alumno
@endsection

@section('contenido')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<br><br><h1 align="left"> <pre>          Registro De Alumnos </pre></h1>
<br><br>

<div class="container">
     <div class="row">
     <div class="col-md-5">
<form method="POST" action="{{ route('portafolio.store')}}" >
      @csrf
      <div class="form-group">
      <input id="#" name="nombre" class="form-control"  placeholder="Nombre(s)" maxlength="30" minlength="3" required value="{{old('nombre')}}"><br><br>
        {!! $errors->first('nombre', '<small>:message</small><br><br>') !!}  
        </div>
        <div class="form-group">
      <input name="paterno" id="#" class="form-control" placeholder="Apellido paterno" maxlength="25" minlength="4" required value="{{old('paterno')}}"><br><br>
        {!! $errors->first('paterno', '<small>:message</small><br><br>') !!} </div>
          <div class="form-group">
      <input name="materno" id="#" class="form-control" placeholder="Apellido materno" maxlength="25" minlength="4" required value="{{old('materno')}}"><br><br>
      {!! $errors->first('materno', '<small>:message</small><br><br>') !!} </div>
      <div class="form-group">
      <input type="email" name="correo" class="form-control" placeholder="Correo electronico" required maxlength="35" minlength="11" value="{{old('email')}}"><br><br>
      {!! $errors->first('email', '<small>:message</small><br><br>') !!} </div>

     <div class="form-group">
      <select name="carrera" id="inputLuces" class="form-control">
        <option value="0">Selecciona tu carrera</option>
        <option value="Desarrollo y Gestión de Software">Desarrollo y Gestión de Software </option>
        <option value="Gastronomía">Gastronomía</option>
        <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
        <option value="Mantenimiento industrial">Mantenimiento industrial</option>
      </select><br><br>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Registrar</button> </div>
      <br><br>
      
</form>
</div>
     </div>
     </div>

     <div class="card">
  <h5 class="card-header">Hecho en Laravel</h5>
  <div class="card-body">
      <p class="card-text">made in Mejico</p>
    </div>
</div>
     
@endsection