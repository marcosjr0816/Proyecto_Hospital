<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Doctores</title>
</head>
<body>
    <div class="row">
        <div class="col-md-7">            
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
</body>
</html>