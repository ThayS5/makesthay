@extends('welcome')
@section('title', 'Login')

@section('content')

<div class="ui centered grid login">
	<div class="six wide tablet four wide computer twelve wide mobile column">
		<div class="ui center aligned piled segment">
			<img src="{{asset('assets/img/logo.png')}}" alt="Logo" class="ui image">
			<form action="" class="ui form">
				<div class="field">
					<div class="ui left icon input">
						<input type="email" placeholder="Username">
						<i class="user icon"></i>
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<input type="password" placeholder="Password">
						<i class="key icon"></i>
					</div>
				</div>
				<button type='submit' class="ui pink button">Login</button>

			</form>
		</div>
	</div>
</div>



@endsection