@extends('layouts.app')

@section('main')



<div class="container">              
    <div align="center">
        <h2>CRUD LARAVEL</h2>
    </div>
    
    <h2>Categories <a class="btn btn-info" href="/category-create">New Category</a> </h2>

    @if(session()->has('add'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session()->get('add')}}</strong>
        </div>
    @endif

    @if(session()->has('del'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session()->get('del')}}</strong>
        </div>
    @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1}}</td>
        <td>{{ $category->title}}</td>
        <td>
            <a href="/category-edit/{{ $category->id}}" class="btn btn-sm btn-info" >Edit</a>
            

            <form action="/category-delete/{{ $category->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
        @endforeach
    </tbody>   
  </table>
  {{$categories->links()}}
</div>

@endsection