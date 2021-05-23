@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-7">            
        <a href="{{route('descargarmedicamentosPDF')}}" class="btn btn-sm btn-primary">Imprimir Medicamentos</a>  
        <table class="table table-striped table-hover">
                <thead class="table table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($medicamentos as $item)
                    <tr>                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>  
                        @endforeach
                        </tr>                      
                            
                <tr>   
                </tr>
                </tbody>
            </table>
@endsection