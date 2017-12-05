@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body" >
                <table class="table">
                    <thead>
                        <th>Nombre usuario</th>
                        <th>Contacto</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        @if($user->active == 1)
                        <td>{{$user->name}}</td>
                        @else
                        <td>Usuario Bloqueado {{$user->name}}</td>
                        @endif
                        <td>{{$user->email}}</td>
                        <td>      
                          <a href="{{route('users.edit',$user->id)}}" type="button" class="btn btn-info">Editar Perfil</a>
                          @if($user->active == 1)
                          <a href="{{route('users.block',$user->id)}}" type="button" class="btn btn-warning">Bloquear Perfil</a>
                          @else
                          <a href="{{route('users.unblock',$user->id)}}" type="button" class="btn btn-warning">Desbloquear Perfil</a>
                          @endif
                          <a href="{{route('users.destroy', $user->id)}}" type="button" class="btn btn-danger" onclick="return confirm('¿Está seguro de eliminar este usuario?')">Eliminar</a>     
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                </table>
        </div>
    </div>
        {!! $users->render() !!}
</div>
@endsection
