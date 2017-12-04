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
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>      
                          <a href="{{route('users.edit',$user->id)}}" type="button" class="btn btn-warning">Editar Perfil</a>
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
