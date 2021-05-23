@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-7">            
        <a href="{{route('descargardoctoresPDF')}}" class="btn btn-sm btn-primary">Imprimir Doctores</a>  
        <table class="table table-striped table-hover">
                <thead class="table table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($doctores as $item)
                    <tr>                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->identificacion}}</td>
                        <td>{{$item->p_nombre}}</td>  
                        <td>{{$item->s_nombre}}</td> 
                        <td>{{$item->p_apellido}}</td>
                        <td>{{$item->s_apellido}}</td>
                        @endforeach
                        </tr>                      
                            
                <tr>   
                </tr>
                </tbody>
            </table>
@endsection