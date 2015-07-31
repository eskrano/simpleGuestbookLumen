@extends('app')

@include('chatform')

@section('content')

	@foreach ($chatData as $message)
		<div class ="container">
			<div class ="panel panel-default">
				<div class ="panel-heading">
					{{ $message->name }} пишет:
				</div>
				<div class ="panel-body">
					{{ $message->text }}
				</div>
				<div class="panel-footer">
					Posted: {{ $message->published_at }}
				</div>
			</div>
		</div>

	@endforeach

@stop