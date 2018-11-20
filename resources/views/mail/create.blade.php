
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
      <h1>Upload HTML</h1>
      <form action="{{route('mail.store')}}" enctype="multipart/form-data" method="POST"> 
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre del archivo:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="File" name="name">
        <small id="emailHelp" class="form-text text-muted">Nombre del archivo</small>
      </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Carga HTML</label>
          <input name="file" type="file" accept="html/*" class="form-control-file" id="file" />
    
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button class="btn btn-dark">Limpiar</button>
      </form>
    <br>

     @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
      @endif

      @if($errors)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert"> 
          {{ $error }}
          </div>
        @endforeach
      @endif
   </div>
</div>
@endsection
