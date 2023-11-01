<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Municipalities List</title>
  </head>
  <body>
    
      <x-app-layout>
        <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Municipalities List') }} </h2>
             </x-slot> 
             <div class="py-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900">
                    <div class="container">    
    <a href="{{ route('municipios.create')}}" class="btn btn-success">Add</a>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Municipality</th>
            <th scope="col">Department</th>            
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($municipios as $municipio)
          <tr>
            <th scope="row">{{$municipio->muni_codi}}</th>
            <td>{{$municipio->muni_nomb}}</td>
            <td>{{$municipio->depa_nomb}}</td>   
            <td>   
              <a href="{{route('municipios.edit',['municipio'=>$municipio->muni_codi])}}"
                class="btn btn-info">Edit</a></li>

              <form action="{{ route('municipios.destroy', ['municipio'=>$municipio->muni_codi])}}"
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
  </div>
</div>
</div>
</div>
  </x-app-layout>
  </body>
</html>