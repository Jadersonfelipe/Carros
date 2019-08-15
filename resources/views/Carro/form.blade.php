<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- 'modelo', 'placa', 'cor', 'marcas_id' -->

<form method="POST" action="{{url('/carros/store')}}">
   
   @foreach($errors->all() as $erro)
   {{$erro}}
   @endforeach
    @csrf
  <div class="form-group">
    <label for="modelo">Modelo do Veiculo</label>
    <input type="text" class="form-control" name="modelo" placeholder="modelo">
    {{$errors->first('modelo')}}
  </div>
  <div class="form-group">
    <label for="placa">Placa</label>
    <input type="text" class="form-control" name="placa" placeholder="placa">
    {{$errors->first('placa')}}
  </div>
  <div class="form-group">
    <label for="cor">Cor</label>
    <input type="text" class="form-control" name="cor" placeholder="cor">
  </div>
  {{$errors->first('cor')}}
  
  <div class="form-group">
    <label for="Marcas cadastradas">Marcas Cadastradas</label>
    <select multiple class="form-control" name="marca_id" unique>
      @foreach($marcas as $marca)
      <option value="{{$marca->id}}">{{$marca->nome}}</option>
      @endforeach
      
    </select>
  </div>
  {{$errors->first('marca_id')}}
  
    <button type="submit">Cadastrar</button>
    <button type="reset">Limpar</button>


</form>

</body>
</html>