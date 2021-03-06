@extends('layouts.app')
@section('content')

<div class="container">

  <div class="row">

    <div class="col-lg-3">
  
      <h1 class="my-4">@if(!empty($channel)) {{$channel->title}} @else Aún no has creado tu canal @endif</h1>
      @if(!empty($channel))<img class='w-100' src="{{asset('storage/'.$channel->image)}}">@endif
      
      <div class="list-group">
        <a href="{{route('create','Video')}}" class="list-group-item">Nuevo Video</a>
        <a href="" class="list-group-item">Tus Videos</a>
        <a href="#" class="list-group-item">Tus Subscipciones</a>
        @if($item == 'Channel')<a href="{{route('edit', 'Channel')}}" class="list-group-item">Editar canal</a>@endif

      </div>

    </div>
   
    <div class="col-lg-9">

      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item One</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Two</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item Three</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

         </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->
</div>
@endsection