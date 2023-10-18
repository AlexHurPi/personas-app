<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Comunas</title>
  </head>
  <body>
    <div>
      
    </div>
    <div class="container">
      <a type="button" class="btn btn-link">Comunas</a>
      <a type="button" class="btn btn-link" href="{{ route('municipios.index')}}">Municipios</a>
      <a type="button" class="btn btn-link" href="{{ route('departamentos.index')}}">Departamentos</a>
      <a type="button" class="btn btn-link" >Paises</a>
      <h1>Commune List</h1>
    <a href="{{ route('comunas.create')}}" class="btn btn-success">Add</a>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Commune</th>
            <th scope="col">Municipality</th>            
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($comunas as $comuna)
          <tr>
            <th scope="row">{{$comuna->comu_codi}}</th>
            <td>{{$comuna->comu_nomb}}</td>
            <td>{{$comuna->muni_nomb}}</td>            
            <td>
              <a href="{{route('comunas.edit',['comuna'=>$comuna->comu_codi])}}"
              class="btn btn-info">Edit</a></li>

              <form action="{{ route('comunas.destroy', ['comuna'=>$comuna->comu_codi])}}"
              method='POST' style="display: inline-block">
              @method('delete')
              @csrf
                <input class="btn btn-danger" type="submit" value="delete">  
              </form>
            </td>
          </tr>   
          @endforeach       
        </tbody>
      </table>
    </div>
  </body>
</html>