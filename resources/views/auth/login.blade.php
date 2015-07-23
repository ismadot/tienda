@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-user"></i> Iniciar sesión</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="page">

					@include('store.partials.errors')

					<form method="POST" action="/auth/login">
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label for="email">Email</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Password</label>
					        <input class="form-control" type="password" name="password" id="password">
					    </div>

					    <div class="form-group">
					        <input type="checkbox" name="remember"> Remember Me
					    </div>

					    <div class="form-group">
					        <button class="btn btn-primary btn-block" type="submit">Login</button>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop