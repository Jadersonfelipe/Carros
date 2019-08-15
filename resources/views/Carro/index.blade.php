<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class= "container">
<div>
<h1>Disponiveis</h1>
    <table class="table border">
  
    <tr>
      <th scope="col">id</th>
      <th scope="col">Modelo</th>
      <th scope="col">Placa</th>
      <th scope="col">Cor</th>
      <th scope="col">Marca</th>
    </tr>
   
  @foreach($carros as $carro)
    <tr>
    <!-- 'modelo', 'placa', 'cor', 'marcas_id' -->
      <th>{{$carro->id}}</th>
      <td>{{$carro->modelo}}</td>
      <td>{{$carro->placa}}</td>
      <td>{{$carro->cor}}</td>
      <td>{{$carro->marca->nome}}</td>
      </tr>
    @endforeach
    </table>
    </div>
    <div>
        <h1>Deletados</h1>
    <table class="table border">
  
    <tr>
      <th scope="col">id</th>
      <th scope="col">Modelo</th>
      <th scope="col">Placa</th>
      <th scope="col">Cor</th>
      <th scope="col">Marca</th>
    </tr>
   
  @foreach($carros_deletados as $carro)
    <tr>
    <!-- 'modelo', 'placa', 'cor', 'marcas_id' -->
      <th>{{$carro->id}}</th>
      <td>{{$carro->modelo}}</td>
      <td>{{$carro->placa}}</td>
      <td>{{$carro->cor}}</td>
      <td>{{$carro->marca->nome}}</td>
      </tr>
    @endforeach
    </table>
    </div>

    <div>
    <button type="button" class="btn btn-primary"> <a href="{{url('carros/form')}}">Cadastrar Novo</a> </button>
    <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->

    
    </div>











    
</body>
</html>