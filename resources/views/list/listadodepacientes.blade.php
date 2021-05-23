@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-7">     
        <a href="{{route('descargarpacientesPDF')}}" class="btn btn-sm btn-primary">Imprimir Pacientes</a>       
        <table class="table table-striped table-hover">
                <thead class="table table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $item)
                    <tr>                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->identificacion}}</td>
                        <td>{{$item->p_nombre}}</td>  
                        <td>{{$item->s_nombre}}</td> 
                        <td>{{$item->p_apellido}}</td>
                        <td>{{$item->s_apellido}}</td>
                        <td>{{$item->direccion}}</td>
                        <td>{{$item->telefono}}</td>
                        @endforeach
                        </tr>                      
                            
                <tr>   
                </tr>
                </tbody>
            </table>
@endsection