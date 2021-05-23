@extends('layouts.master')

@section('content')
        <div>
                <h3 class="text-center mb-4">Agregar Paciente</h3>
                <form action="{{route('store2')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Identificacion</label>
                            <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="Ingrese la identificacion">
                        </div>
                        <div class="form-group">
                            <label>Primer Nombre</label>
                            <input type="text" class="form-control" id="p_nombre" name="p_nombre" placeholder="Ingrese el primer nombre">
                        </div>
                        <div class="form-group">
                            <label>Segundo Nombre</label>
                            <input type="text" class="form-control" id="s_nombre" name="s_nombre" placeholder="Ingrese el segundo nombre">
                        </div>
                        <div class="form-group">
                            <label>Primer Apellido</label>
                            <input type="text" class="form-control" id="p_apellido" name="p_apellido" placeholder="Ingrese el primer apellido">
                        </div>
                        <div class="form-group">
                            <label>Segundo Apellido</label>
                            <input type="text" class="form-control" id="s_apellido" name="s_apellido" placeholder="Ingrese el segundo apellido">
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                </form>



                @if (Session::has('exitoso'))
                    <div class="alert alert-success">
                    {{Session::get('exitoso')}}
                    </div>
                @endif
            </div>
        </div>
    </div> 
@endsection