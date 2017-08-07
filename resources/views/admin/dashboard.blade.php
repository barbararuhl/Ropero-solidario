@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Carga de productos</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/dashboard/crear" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="prenda" class="col-md-4 control-label">Prenda</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="prenda" value="{{ old('prenda') }}" required autofocus>

                                @if ($errors->has('prenda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                            <label for="precio" class="col-md-4 control-label">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control" name="precio" value="{{ old('precio') }}" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('talle') ? ' has-error' : '' }}">
                            <label for="talle" class="col-md-4 control-label">Talle</label>

                            <div class="col-md-6">
                                <input id="talle" type="text" class="form-control" name="talle" value="{{ old('talle') }}" required>
                            </div>
                        </div>

 						<div class="form-group{{ $errors->has('clase') ? ' has-error' : '' }}">
                            <label for="clase" class="col-md-4 control-label">Clase</label>

                            <div class="col-md-6">
                                <input id="clase" type="text" class="form-control" name="clase" value="{{ old('clase') }}" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('detalle') ? ' has-error' : '' }}">
                            <label for="detalle" class="col-md-4 control-label">Detalle</label>

                            <div class="col-md-6">
                                <input id="detalle" type="text" class="form-control" name="detalle" value="{{ old('detalle') }}" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label">Imagen:</label>

                             <div class="col-md-6">
                            <input type="file" name="avatar">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cargar!
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar Producto</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/dashboard/crear" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="prenda" class="col-md-4 control-label">Prenda</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="prenda" value="{{ old('prenda') }}" required autofocus>

                                @if ($errors->has('prenda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                            <label for="precio" class="col-md-4 control-label">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control" name="precio" value="{{ old('precio') }}" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('talle') ? ' has-error' : '' }}">
                            <label for="talle" class="col-md-4 control-label">Talle</label>

                            <div class="col-md-6">
                                <input id="talle" type="text" class="form-control" name="talle" value="{{ old('talle') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('clase') ? ' has-error' : '' }}">
                            <label for="clase" class="col-md-4 control-label">Clase</label>

                            <div class="col-md-6">
                                <input id="clase" type="text" class="form-control" name="clase" value="{{ old('clase') }}" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('detalle') ? ' has-error' : '' }}">
                            <label for="detalle" class="col-md-4 control-label">Detalle</label>

                            <div class="col-md-6">
                                <input id="detalle" type="text" class="form-control" name="detalle" value="{{ old('detalle') }}" required>
                            </div>
                        </div>


                       <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label">Imagen:</label>

                             <div class="col-md-6">
                            <input type="file" name="avatar">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modificar!
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar Productos</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/dashboard/eliminar">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="idProducto" class="col-md-4 control-label">Id Producto</label>

                            <div class="col-md-6">
                                <input id="idProducto" type="text" class="form-control" name="idProducto" value="{{ old('idProducto') }}" required autofocus>

                                @if ($errors->has('idProducto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idProducto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Eliminar!
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