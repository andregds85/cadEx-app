@extends('layouts.app')
@section('content')
<?php 
use App\Models\Produto;
use App\Http\Controllers\ProdutoController;
?>


<SCRIPT> 
<!--
function valida()
{

if(document.regform.nome.value=="" || document.regform.nome.value.length < 8)
{
alert( "Preencha campo Nome com Nome Completo!" );
regform.nome.focus();
return false;
}

 if(document.regform.preco.value.length < 4  || document.regform.preco.value.length > 10)
    {
    alert( "Preencha campo Preço corretamente Ex: 1,00 ");
    regform.preco.focus();
    return false;
}


    if (document.regform.gestante.value.length == 0 )   
     {
    alert('Falta escolher a Gestante');
    regform.gestante.focus();
    return false;
    }

    


return true;
}
 
//-->
</SCRIPT>



<script>
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>

<script language="javascript" >
    function combo() {
        var comboNome = document.getElementById("gestantante");
        if (comboNome.options[comboNome.selectedIndex].value == "" ){
                alert("Selecione um nome antes de prosseguir");
        }
    }    
</script>


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
         <option value=""> </option>
         <option value="0">Não</option>
         <option value="1">Sim</option>

      
         </select>
         <fieldset id="children">
         </fieldset>
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
    Children.container.append('<label>Quem Recebe a Gestante : ? <textarea class="form-control" name="nasceDestino" rows="3"></textarea></label>');
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


                     
<div class="form-group row" required>
<label for="gestante" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Central') }}</label>
<div class="col-md-6">

         <select name="acessoVenosoCentral" id="acesso-qnt" class="form-control">
         <option value="0">Falta Preencher</option>
         <option value="0">Não</option>
         <option value="1">Sim</option>

         </select>
         <fieldset id="acesso">
         </fieldset>
 </div>
</div>


<script type="text/javascript">
var $acessoQnt = jQuery('#acesso-qnt'),
$acesso = jQuery('#acesso');


var acesso = {};
acesso.container = $acesso;
acesso.add = function(i) {
while (i--) {
    acesso.container.append('<label>Onde ? Acesso Venoso Central : ? <textarea class="form-control" name="avcOnde" rows="3"></textarea></label>');
}

}
acesso.remove = function(i) {
while (i--) {
acesso.container.find('label:last').remove();
}
}

$acessoQnt.on('change', function(){
var $this = jQuery(this),
i = $this.val(),
qnt = $acesso.find('label').length;


if (qnt > i) {
acesso.remove(qnt - i);
}
if (qnt < i) {
acesso.add(i - qnt);
}
});
</script>




<div class="form-group row" required>
<label for="contato" class="col-md-4 col-form-label text-md-right">{{ __('Contato') }}</label>
<div class="col-md-6">

         <select name="Contato" id="contato-qnt" class="form-control">
         <option value="0">Falta Preencher</option>
         <option value="0">Não</option>
         <option value="1">Sim</option>

         </select>
         <fieldset id="contato">
         </fieldset>
 </div>
</div>


<script type="text/javascript">
var $contatoQnt = jQuery('#contato-qnt'),
$contato = jQuery('#contato');


var contato = {};
contato.container = $contato;
contato.add = function(i) {
while (i--) {
    contato.container.append('<label> Motivo do Contato : ? <textarea class="form-control" name="motivoContato" rows="3"></textarea></label>');
}

}
contato.remove = function(i) {
while (i--) {
contato.container.find('label:last').remove();
}
}

$contatoQnt.on('change', function(){
var $this = jQuery(this),
i = $this.val(),
qnt = $contato.find('label').length;


if (qnt > i) {
contato.remove(qnt - i);
}
if (qnt < i) {
contato.add(i - qnt);
}
});
</script>

<!-- respiratoria e motivo da Respiratoria -->
<div class="form-group row" required>
<label for="respiratoria" class="col-md-4 col-form-label text-md-right">{{ __('Respiratória') }}</label>
<div class="col-md-6">

         <select name="respiratoria" id="respiratoria-qnt" class="form-control">
         <option value="0">Falta Preencher</option>
         <option value="0">Não</option>
         <option value="1">Sim</option>

         </select>
         <fieldset id="respiratoria">
         </fieldset>
 </div>
</div>


<script type="text/javascript">
var $respiratoriaQnt = jQuery('#respiratoria-qnt'),
$respiratoria = jQuery('#respiratoria');


var respiratoria = {};
respiratoria.container = $respiratoria;
respiratoria.add = function(i) {
while (i--) {
    respiratoria.container.append('<label> Motivo da Respirátoria : ? <textarea class="form-control" name="motivoRespiratoria" rows="3"></textarea></label>');
}

}
respiratoria.remove = function(i) {
while (i--) {
respiratoria.container.find('label:last').remove();
}
}

$respiratoriaQnt.on('change', function(){
var $this = jQuery(this),
i = $this.val(),
qnt = $respiratoria.find('label').length;


if (qnt > i) {
respiratoria.remove(qnt - i);
}
if (qnt < i) {
respiratoria.add(i - qnt);
}
});
</script>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-primary" onclick="combo()" Value="Cadastrar">
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
