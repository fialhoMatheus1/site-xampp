@extends('padrao')
@section('content')
<section>
  <div class="container cadastro">
  <p class="titulo">Cadastrar Carro</p>
    <form class="row g-3" method="post" action="{{route('salvar-banco-carro')}}">
      @csrf
      <div class="col-md-12">
        <label for="inputModelo" class="form-label">Modelo</label>
        <input type="text" name="modelos" class="form-control" id="inputModelo" placeholder="Camaro">
        @error('modelos')
          <div class="text-danger">
            *Preencher o campo MODELO!
          </div>
        @enderror
      </div>

      <div class="col-12">
        <label for="inputMarca" class="form-label">Marca</label>
        <input type="text" name="marca" class="form-control" id="inputMarca" placeholder="Chevrolet">
        @error('marca')
          <div class="text-danger">
            *Preencher o campo MARCA!
          </div>
        @enderror
      </div>
      

      <div class="col-12">
        <label for="inputAno" class="form-label">Ano</label>
        <input type="text" name="ano" class="form-control" id="inputAno" placeholder="2013">
        @error('ano')
          <div class="text-danger">
            *Preencher o campo ANO!
          </div>
        @enderror
      </div>

      <div class="col-md-12">
        <label for="inputCor" class="form-label">Cor</label>
        <input type="text" name="cor" class="form-control" id="inputCor" placeholder="Amarelo">
        @error('cor')
          <div class="text-danger">
            *Preencher o campo COR!
          </div>
        @enderror
      </div>

      <div class="col-md-12">
        <label for="inputZip" class="form-label">Valor</label>
        <input type="text" name="valor" class="form-control" id="inputZip" placeholder="50.000,00">
        @error('valor')
          <div class="text-danger">
            *Preencher o campo  VALOR!
          </div>
        @enderror
      </div>

      <div class="col-12 botaoCadastro">
        <button type="submit" class="btn btn-light corBotao">Cadastrar</button>
      </div>
    </form>
  </div>
</section>
@endsection