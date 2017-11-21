@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Medida</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/action') }}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre del evento</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Descripción</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" id="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Fecha inicio</label>

                            <div class="col-md-6">
                                <input id="fdate" type="date" class="form-control" name="date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                              <label for="sel1">Lugar del evento:</label>
                              <select class="form-control" id="type">
                                <option></option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                              <label for="sel1">Tipo de medida:</label>
                              <select class="form-control" id="type">
                                <option></option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear medida
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
