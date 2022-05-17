@extends('layouts.app')
@section('content')
<?php 
use App\Models\Produto;
use App\Http\Controllers\ProdutoController;
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro') }}</div>

                <div class="card-body">
                <form action="{{ route('produto.store') }}" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">                        @csrf

                                                
                        <!-- Campo Nome -->
                        <div class="row mb-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         
                        
                        <!-- Campo Preço -->
                        <div class="row mb-3">
                            <label for="preco" class="col-md-4 col-form-label text-md-end">{{ __('Preço') }}</label>
                            <div class="col-md-6">
                                <input id="preco" type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{ old('preco') }}" required autocomplete="preco" autofocus>
                                @error('preco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- Campo quantidade -->
                        <div class="row mb-3">
                            <label for="preco" class="col-md-4 col-form-label text-md-end">{{ __('Quantidade') }}</label>
                            <div class="col-md-6">
                                <input id="quantidade" type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" value="{{ old('quantidade') }}" required autocomplete="quantidade" autofocus>
                                @error('quantidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                        <div class="form-group row" required>

<label for="gestante" class="col-md-4 col-form-label text-md-right">{{ __('Gestante') }}</label>
<div class="col-md-6">

         <select name="gestante" id="children-qnt" class="form-control">
         <option value="0">Falta Preencher</option>
         <option value="0">Não</option>
         <option value="1">Sim</option>

         </select>
         <fieldset id="children">
         </fieldset><!-- #children -->
 </div>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
var $chidrenQnt = jQuery('#children-qnt'),
$children = jQuery('#children');



var Children = {};
Children.container = $children;
Children.add = function(i) {
while (i--) {
    Children.container.append('<label>Se o nascimento for no Destino ? Quem Recebe <textarea class="form-control" name="nasceDestino" rows="3"></textarea></label>');
}
}
Children.remove = function(i) {
while (i--) {
Children.container.find('label:last').remove();
}
}


$chidrenQnt.on('change', function(){
var $this = jQuery(this),
i = $this.val(),
qnt = $children.find('label').length;


if (qnt > i) {
Children.remove(qnt - i);
}
if (qnt < i) {
Children.add(i - qnt);
}
});

</script>




















                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







            </div>
        </div>
    </div>
</div>
@endsection
