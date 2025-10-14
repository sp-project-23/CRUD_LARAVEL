<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">   
  <div class="row">    
    <div class="col-lg-4"></div> 
    <div class="col-lg-4">
      <a class="btn btn-sm btn-info" href="/view">Categories</a>
      <form action="/store" method="post" class="mt-2">
          @csrf
          <input type="text" name="title" class="form-control" placeholder="Enter category" value="{{ old('title')}}"/>
          @if($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
          @endif
          <div class="d-flex justify-content-end mb-2">
            <button type="submit" class="btn btn-sm btn-outline-success mt-2">Add</button>
          </div>
      </form>
    </div>
    <div class="col-lg-4"></div> 
  </div>   
</div>