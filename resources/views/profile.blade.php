@extends('layouts.base')

@section('container')

<div class="content">
	<div>
		<div>
		<img src="">
		</div>
		<div>
			{{$user->name}}
		</div>
		<div>
			@if($user->role == 0 )
			admin
			@else
			client
			@endif
		</div>
		<div>
			{{$user->password}}
		</div>
	</div>
</div>

@stop