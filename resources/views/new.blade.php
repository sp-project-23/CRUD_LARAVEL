<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">   
  <div class="row">    
    <div class="col-lg-4"></div> 
    <div class="col-lg-4 bg-light rounded p-3">
      <form action="/save" method="post" class="mt-2">
          @csrf
          <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title')}}"/>
          @if($errors->has('title'))
            <div class="alert alert-danger" role="alert">{{$errors->first('title')}}</div>
          @endif
          <div class="d-flex justify-content-end mt-2 gap-2">
            <div><a class="btn btn-sm btn-outline-secondary" href="/categories">Back</a></div>
            <div><button class="btn btn-sm btn-outline-success">Add</button></div>
          </div>
      </form>
    </div>
    <div class="col-lg-4"></div> 
  </div>   
</div>