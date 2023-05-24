@extends('layouts.app')

@section('main')

<div class="container pt-5">         
  <h2>Edit Category</h2>     
    <div class="row">
      <div class="col-sm-4">
        <form action="/category-update/{{ $category->id}}" method="post">
           @csrf
           @method('put')
            <input type="text" name="title" class="form-control" value="{{ $category->title}}" placeholder="Enter title"/>
            <button type="submit" class="btn btn-success mt-4">Update</button>
        </form>
      </div>
    </div>     
</div>

@endsection