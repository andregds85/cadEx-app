@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                            

                        
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Gestante') }}</label>

                                <select name="gestante" id="children-qnt">
	                            <option value="0">0</option>
                            	<option value="1">1</option>
                            	<option value="2">2</option>
	                            <option value="3">3</option>
                               	<option value="4">4</option>
                                <option value="5">5</option>
                            	<option value="6">6</option>
                                </select>
                                </div>
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
		Children.container.append('<label>Gestante: <input type="text" name="qasdasd"></label>');
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
