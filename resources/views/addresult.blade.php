@extends('app')

@section('content')
	
	<div class="container">

		@if (isset($error))
			<div class ="panel panel-danger">
				<div class ="panel-heading">
					Ошибка
				</div>
				<div class ="panel-body">
					<p>
						{{ $error }}
					</p>
				</div>
			</div>
		@endif

		@if (isset($success))
			<div class ="panel panel-success">
				<div class ="panel-heading">
					Успех!
				</div>
				<div class ="panel-body">
					<p>
						{{ $success }}

						<a href ="/chat" class ="btn btn-success">
							Вернуться в чат
						</a>
					</p>
				</div>
			</div>

		@endif

@stop