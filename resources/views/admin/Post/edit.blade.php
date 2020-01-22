@extends('layouts.base')

@section('container')

<div class="form-group">
  <br>

<form action="{{route('post.update',$object->id)}}" method="POST">  
  {{method_field('PATCH')}}
  {{ csrf_field() }}
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="title">Title <span class="astk">*</span></label>
        <input type="text" class="form-control txt" name="title" placeholder="" value="{{$object->title}}">
      </div><!-- /.form-group -->
      <div class="form-group">
        <label for="description">Description <span class="astk">*</span></label>
        <textarea type="text" class="form-control txt" name="description" placeholder="" value="{{$object->description}}" ></textarea>
      </div><!-- /.form-group -->
      <div class="form-group">
        <select class="form-control" name="category_id">
          @foreach($categorys as $category)
          <option value=" {{$category->id}} "> {{$category->title}} </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="price">Price <span class="astk">*</span></label>
        <input type="text" class="form-control txt" name="price" placeholder="" value=" {{$object->price}} " >
      </div><!-- /.form-group -->
      <div class="form-group">
        <input type="hidden" class="form-control txt" name="user_id" value="{{Auth::User()->id}}" placeholder="">
      </div><!-- /.form-group -->
      <div class="action text-right">

        @if($object->verified == 1)
             <a href="{{route('verified', [$object , $object->verified])}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Refresh"> verified </a>
         @else 
             <a href="{{route('verified', [$object , $object->verified])}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Refresh"> not verified   </a>                          
        @endif

        <button class="btn btn-primary btn-upper">Add Post</button>
      </div><!-- /.action -->


    </div>
        
  </div>

</form> 

</div>

@stop		