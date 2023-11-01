<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>Add Comuna</title>
  </head>
  <body>
    <x-app-layout>
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Add Communes') }} </h2>
        </x-slot>
        <div class="py-12">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
            
              <div class="container mb-3">    

    <form method="POST" action="{{route('comunas.store')}}">
      @csrf
      <div class="mb-2">
        <label for="id" class="form label">Code</label>
        <input type="text" class="form-input rounded focus:outline-none w-full bg-gray-100" id="id" aria-describedby="idlHelp" name="id" disabled>
    </div>    
        <div id="idHelp" class="form-text">Comune code</div>
            <div class="mb-2">
        <label for="name" class="form label">Commune</label>
        <input type="text" class="form-input rounded focus:outline-none w-full" id="name" aria-describedby="namelHelp"
        name="name" placeholder="Comuna name.">
      </div>
      <label for="municipality">Municipality:</label>
      <select class="form-select w-60 rounded-md focus:outline-none" id="municipality" name="code" required>
        <option selected disabled value="">Choose one...</option>
        @foreach ($municipios as $municipio)
        <option value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
      @endforeach
      </select>
        <div class="mt-3">
        <button type="submit" class="btn btn-info" >
          Save</button>
          <a href="{{route('comunas.index')}}" class="btn btn-warning">Cancel</a>        
      </div>      
    </form>
  
  <!------>
</div> 
</div>  
</div>  
  </x-app-layout>
  </body>
</html>