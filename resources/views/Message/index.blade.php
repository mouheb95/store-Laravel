@extends('layouts.base')

@section('container')


<div class="checkout-box faq-page">
	<div class="row">
		<div class="col-md-12">
			<h2 class="heading-title">Messages</h2>
			<!-- <span class="title-tag">Last Updated on November 02, 2014</span> -->
			<div class="panel-group checkout-steps" id="accordion">
				@foreach($messages as $message)
				
				<!-- checkout-step-01  -->
				<div class="panel panel-default checkout-step-01">

				<!-- panel-heading -->
				<div class="panel-heading">
				<h4 class="unicase-checkout-title">
				    <a data-toggle="collapse" class="collapsed" href="#collapse{{$message->id}}">
				      <span>1</span>
				      @foreach($senders as $sender)
					      @if($sender->message->user == Auth::user())
					      {{$sender->date_envoi_message}} 
					      @endif
				      @endforeach

				    </a>

				 </h4>
				</div>
				<!-- panel-heading -->

				<div id="collapse{{$message->id}}" class="panel-collapse collapse" style="height: 0px;">

				<!-- panel-body  -->
				<div class="panel-body">
					{{$message->messages_text}}		
				</div>
				<!-- panel-body  -->

				</div><!-- row -->
				</div>
				<!-- checkout-step-01  -->
				
				@endforeach
			</div><!-- /.checkout-steps -->

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
		
		</div>
	</div><!-- /.row -->
</div>

@stop