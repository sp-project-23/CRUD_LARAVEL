<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">   
  <div class="row">    
    <div class="col-lg-2"></div> 
    <div class="col-lg-8">           
      <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-sm btn-outline-primary" href="/add">Add Category</a>
      </div>

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
      <table class="table table-hover table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th class="w-50">Title</th>
            <th>Added On</th>
            <th>Updated On</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
          <tr>
            <td>{{ $loop->index+1}}</td>
            <td>{{ $category->title}}</td>
            <td>{{ date('d M,Y',strtotime($category->created_at)) }}</td>
            <td>{{ date('d M,Y',strtotime($category->updated_at)) }}</td>
            <td>
              <div class="d-flex justify-content-start gap-2">
                <div><a href="/edit/{{ $category->id}}" class="btn btn-sm btn-outline-success" >Edit</a></div>
                <div>
                  <form action="/remove/{{ $category->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                  </form>
                </div>
              </div>
                
            </td>
        </tr>
            @endforeach
        </tbody>   
      </table>
      {{$categories->links()}}
    </div>
  </div>
  <div class="col-lg-2"></div> 
</div>