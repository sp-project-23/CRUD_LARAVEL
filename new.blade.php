@extends('layouts.app')

@section('main')

<div class="container pt-5">         
  <h2>New Category</h2>     
    <div class="row">
      <div class="col-sm-4">
        <form action="/category-store" method="post">
           @csrf
            <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title')}}"/>
            @if($errors->has('title'))
              <p class="text-danger">{{$errors->first('title')}}</p>
            @endif
            <button type="submit" class="btn btn-success mt-4">Create</button>
        </form>
      </div>
    </div>     
</div>

@endsection