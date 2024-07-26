{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> --}}
     @extends('Layouts.adminLayout')
     @section('content')
<div class="container mt-3">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
   @if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Category</h3>
          <a href="/add-category"> <button type="button" class="btn btn-primary"><b>Create Category </b></button> </a>
        </div>
     <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
        <thead>
          <tr>
            <th>Sr No</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
       </thead>
        <tbody>
          @foreach ($category as $key => $category)
        <tr>
         <td>{{ $key + 1 }}</td>
         <td>{{$category->category_name}}</td>
         <td>
            <a href="/delete-category/{{$category->id}}"> <button type="submit" class="btn btn-danger">Remove</button> </a>

         </td>
       </tr>
            @endforeach
         </tbody>
      </table>
    </div>
  </div>
</div>

{{-- </body>
</html> --}}
@endsection
