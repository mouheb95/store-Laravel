@extends('layouts.admin')
@section('container')

<div class="app-content">	
	<div class="app-content--inner">

	<div class="card card-box mb-5">
    <div class="card-header">
        <h5 class="my-3">
            New User
        </h5>
    </div>
    <form class="was-validated" method="POST" action=" {{route('user.store')}} ">
    	{{csrf_field()}}
	    <div class="card-body">
	        
	    <div class="row">
	        <div class="col-md-6 mb-3">
	            <label for="form-2-first-name">Name</label>
	            <input type="text" class="form-control is-invalid" id="form-2-first-name" placeholder="Name" name="name" required="">
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="form-email">Email</label>
	            <input type="text" class="form-control is-invalid" id="form-email" placeholder="Email" name="email" required="">
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-6 mb-3">
	            <label class="d-block" for="form-3-select">Role</label>
	            <select name="role" class="custom-select w-100" id="form-3-select" required="">
	                <option value="">Invalid select role</option>
	                <option value="0">Admin</option>
	                <option value="1">Client</option>
	            </select>
	        </div>
	        <div class="col-md-6 mb-3">
	            <label for="form-password">Password</label>
	            <input type="password" class="form-control is-invalid" id="form-password" name="password" placeholder="Password" required="">
	            <div class="invalid-feedback">Invalid password</div>
	        </div>

	    </div>
	   
	    <div class="row mb-2">
	    	<div class="col-md-6 mb-3">
	 	   		<input type="submit" class="btn btn-sm btn-primary" value="Add">
	    	</div>
	    </div>
	</form>

    </div>
</div>

	</div>
</div>
@stop