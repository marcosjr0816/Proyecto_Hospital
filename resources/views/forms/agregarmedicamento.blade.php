@extends('layouts.master')

@section('content')
        <div>
                <h3 class="text-center mb-4">Agregar Medicamento</h3>
                <form action="{{route('store3')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del medicamento">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripcion">
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