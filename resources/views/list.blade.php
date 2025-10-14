<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">              
  <div class="d-flex justify-content-end mb-2">
    <a class="btn btn-sm btn-outline-primary" href="/new">Add Category</a>
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
            <a href="/edit/{{ $category->id}}" class="btn btn-sm btn-info" >Edit</a>
            <a href="/delete/{{ $category->id}}" class="btn btn-sm btn-danger" >Delete</a>           

            <!-- <form action="/delete/{{ $category->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form> -->
        </td>
    </tr>
        @endforeach
    </tbody>   
  </table>
  {{$categories->links()}}
</div>