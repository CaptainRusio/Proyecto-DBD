  @extends('layouts.app')

@section('content')
  
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form" method="post" action="{{ route('users.update', $user->id) }}">
      {{ method_field('PUT') }}
      {{ csrf_field() }} 
        <fieldset>

          <!-- Form Name -->
          <legend>Editar perfil de {{$user->name}}</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nombre Usuario</label>
            <div class="col-sm-10">
              <input type="text" value="$user->name" placeholder="{{$user->name}}" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email</label>
            <div class="col-sm-10">
              <input type="text" value="$user->email" placeholder="{{$user->email}}" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <a href="{{url('users')}}" type="submit" class="btn btn-default">Cancelar</a>
                
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div>

@endsection
        