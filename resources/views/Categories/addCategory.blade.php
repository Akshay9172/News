<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     @extends('Layouts.adminLayout')
     @section('heading')
        <div>
            <h3 class="card-title"><b>Create Category</b></h3>
        </div>
      @endsection
    @section('content')
<div class="container">
    <div class="row row-cards">
  <form class="card" action="/add-category" method="POST" >
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
    @csrf
    <div class="card-body">
        <div class="row row-cards">

    <div class="mb-3">
      <label class="form-label">Category Name:</label>
      <input type="text" class="form-control" id="category_name" placeholder="Enter Category Name" name="category_name" value="{{ old('category_name') }}">

      {{-- <select class="form-control form-select" id="category_name" name="category_name" value="{{old('category_name')}}" required> </select> --}}

      <span class="text-danger">
        @error('category_name')
            {{ $message }}
        @enderror
    </span>
    </div>
    </div>
    </div>

    <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><b>Add Category</b></button>
      </div>
    </div>
  </form>
</div>
  @endsection
</body>

</html>
