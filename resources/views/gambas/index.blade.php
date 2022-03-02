<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="card border-0 shadow mt-3">
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                -{{ $error}} <br>                                    
                                @endforeach
                            </div>                                
                            @endif

                            <form action="{{ route('gambas.store') }}" method="POST">
                                <div class="form-row">
                                    <div class="col-sm-3">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="tipo" class="form-control" placeholder="Tipo" value="{{ old('tipo') }}">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" name="color" class="form-control" placeholder="color">
                                    </div>
                                    <div class="col-auto">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>                                
                                <th>Tipo</th>
                                <th>Color</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gambas as $gamba)
                            <tr>
                                <td>{{ $gamba->id }}</td>
                                <td>{{ $gamba->name }}</td>                                
                                <td>{{ $gamba->tipo }}</td>
                                <td>{{ $gamba->color }}</td>
                                <td>
                                    <form action="{{ route('gambas.destroy', $gamba) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input
                                            type="submit"
                                            value="Eliminar"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Seguro que desea eliminar?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>


       
    </body>
</html>