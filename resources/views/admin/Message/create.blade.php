@extends('layouts.admin')
@section('container')


<form class="register-form" role="form" method="POST" action=" {{route('message.store')}} ">
	{{csrf_field()}}
	<div class="col-md-9 contact-form">
		<div class="col-md-12">
			<div class="form-group col-md-9">
			    <label class="info-title" for="exampleInputComments">Your Message </label>
			    <textarea name="Messages_text" class="form-control unicase-form-control" id="exampleInputComments"></textarea>
	  		</div>
	  		<div class="form-group col-md-3">
	  			<label>Users</label>
			<select class="form-control unicase-form-control selectpicker" style="display: none;" name="receiver">
			@foreach($users as $user)
			@if($user->id != Auth::user()->id)
			<option value=" {{$user->id}} ">{{$user->name}}</option>
			@endif
			@endforeach
			</select>
			</div>
		</div>	
		<div class="col-md-12 outer-bottom-small m-t-20">
			<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Send Message</button>
		</div>
	</div>
</form>

@stop

