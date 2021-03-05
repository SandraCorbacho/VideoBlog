@extends('layouts.app')
@section('content')



<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4">Canal Nombre Canal</h1>
      <h1>Este es tu perfil</h1>
      <h3>Aqui podrás:</h3>
      <p>subir Video</p>
      <p>Editar video</p>
      <p>Borrar video</p>
      <p>ver Estadisticas de tu canal</p>
      <p>Ver y gestionar subscripciones</p>

    </div>
   <form method="POST" action="{{route('create', $item)}}">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-lg-9">
      <h2>Nuevo {{$item}}</h2>
      <input type="hidden" name='type' value='{{$item}}' >
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre del {{$item}}</label>
        <input type="text" class="form-control" placeholder="Nombre de tu canal" name='name' @if(old("name")!==null) value="{{ old('name') }}" @endif >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripción del {{$item}}</label>
        <textarea class="form-control" name='description' rows="3"></textarea>
      </div>
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name='image' >
        <label class="input-group-text"  for="inputGroupFile02">Imagen para tu {{$item}}</label>
      </div>
      <input type="submit" value=" crear {{$item}}">
    
    </div>
  </form>

  </div>
  <!-- /.row -->
</div>
@endsection