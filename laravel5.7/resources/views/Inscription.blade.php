@extends('cssinscription')
@section('content')
    <main>
    	<div class="container">
    		<h2 class="titre">Inscription</h2>
    		
    		@if(count($errors)>0)
    				@foreach($errors->all() as $error)
    				<p class="alert aler-danger">{{$error}}</p>
    				@endforeach
    		@endif
    		<form action="{{ route('Inscription') }}" method="POST">
    			{{ csrf_field() }}
    			<div class="form-input">
    				<input type="text" name="nom" placeholder="Nom" required="true">
    			</div>
    			<div class="form-input">
    				<input type="text" name="prénom" placeholder="Prénom" required="true">
    			</div>
    			<div>
    				<input type="email" name="mail" placeholder="Mail" required="true">
    			</div>
    			<div>
    				<input type="password" name="password" placeholder="Password" required="true">
    			</div>
    			<div>
    				<input type="text" name="centre" placeholder="Centre" required="true">
    			</div>
				<div class="aligne">
    				<p class="Conditions"><input type="checkbox" name="validation" required="true">En cochant cette case, vous acceptez nos <a href="/ConditionsG">Conditions du règlement</a>, <a href="/ConditionsV">Conditions de Ventes </a> ainsi que nos <a href="/mentions_legales">Mentions légales.</a> <p>
				</div>
    				<input type="submit" name="submit" value="Inscription" class="btn-sign">	
    		</form>
    	</div>  	
    </main>   
@endsection 